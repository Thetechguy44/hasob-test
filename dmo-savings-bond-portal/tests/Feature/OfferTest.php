<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Support\Str;
use DMO\SavingsBond\Models\Offer;
use DMO\SavingsBond\Models\Broker;

use Illuminate\Support\Facades\Hash;
use Hasob\FoundationCore\Models\User;
use Illuminate\Support\Facades\Event;

use DMO\SavingsBond\Events\OfferCreated;
use DMO\SavingsBond\Events\OfferDeleted;
use DMO\SavingsBond\Events\OfferUpdated;
use DMO\SavingsBond\Models\Subscription;
use Illuminate\Foundation\Testing\WithFaker;
use Hasob\FoundationCore\Models\Organization;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OfferTest extends TestCase
{
    // use RefreshDatabase;
    use WithFaker;

    protected $organization;
    protected $broker;
    protected $test_user;

    protected function setUp(): void
    {
        parent::setUp();

        // Ensure database is migrated before each test
        $this->artisan('migrate');

        // Create an organization for testing
        $this->organization = Organization::create([
            'org' => 'Test Organization',
            'domain' => 'testorg.com',
            'full_url' => 'https://testorg.com',
            'subdomain' => 'test',
            'is_local_default_organization' => true,
            'is_shut_down' => false,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $this->user = User::create([
            'email' => 'testuser@app.com',
            'telephone' => '1234567890',
            'password' => Hash::make('password'),
            'first_name' => 'Test',
            'last_name' => 'User',
            'organization_id' => $this->organization->id,
            'last_loggedin_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $this->broker = Broker::create([
            'id' => $this->faker->uuid,
            'organization_id' => $this->organization->id,
            'display_ordinal' => 0,
            'status' => 'active',
            'broker_code' => 'BKR001',
            'full_name' => 'Default Broker Name',
            'short_name' => 'Default Short Name',
            'wf_status' => null,
            'wf_meta_data' => null,
        ]);
    }

    // protected function tearDown(): void
    // {
    //     // Clear database after tests
    //     $this->artisan('migrate:reset');
        
    //     parent::tearDown();
    // }

    private function createOffer(array $attributes = []): Offer
    {
        $attributes = array_merge([
            'id' => $this->faker->uuid,
            'organization_id' => $this->organization->id,
            'status' => 'active',
            'offer_title' => 'Default Bond Offer',
            'price_per_unit' => 100.00,
            'max_units_per_investor' => 1000,
            'interest_rate_pct' => 5.50,
            'offer_start_date' => now()->toDateString(),
            'offer_end_date' => now()->addMonths(3)->toDateString(),
            'offer_settlement_date' => now()->addMonths(3)->toDateString(),
            'offer_maturity_date' => now()->addYears(1)->toDateString(),
            'tenor_years' => 1,
        ], $attributes);
    
        return Offer::create($attributes);
    }

    private function createSubscription(array $overrides = [])
    {
        return Subscription::create(array_merge([
            'id' => $this->faker->uuid,
            'offer_id' => $this->createOffer()->id,
            'organization_id' => $this->organization->id,
            'user_id' => $this->user->id,
            'broker_id' => $this->broker->id,
            'broker_code' => 'BKR12345',
            'broker_name' => 'Sample Broker',
            'status' => 'active',
            'total_price' => 5000,
            'investor_email' => 'investor@example.com',
            'first_name' => 'John',
            'middle_name' => 'killman',
            'last_name' => 'Doe',
            'origin_geo_zone' => 'North Central',
            'origin_lga' => 'Abuja Municipal',
            'address_street' => '123 Main St',
            'address_town' => 'Abuja',
            'address_state' => 'FCT',
            'bank_account_name' => 'John Doe',
            'bank_account_number' => '1234567890',
            'bank_name' => 'First Bank',
            'bank_verification_number' => '12345678901',
            'national_id_number' => 'NIN12345678',
            'cscs_id_number' => 'CSCS12345',
            'chn_id_number' => 'CHN54321',
        ], $overrides));
    }    


}