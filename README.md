# DMO Savings bond

The DMO Savings bond is a portal that allows investors to buy bonds. The application comprises of 3 main packages:
- dmo-savings-bond-portal:- a web application
- dmo-savings-bond-module:- a library containing the models, controllers, etc. for the savings bond app.
- hasob-foundation-core-bs-5:- a helper library with reusable components.

## Application Entities

- Bond Offer:- A bond being offered for subscription by investors
- Investor:- A person subscribing to a bond offer.
- Broker:- Every Investor has a broker that manages their account.
- Subscription:- A successfully purchased bond offer by an investor.

## Requirements

- PHP 7.3 | 8.0+
- Composer

## Setup Instructions

1. Clone the repository:
   ```
   git clone https://github.com/Thetechguy44/hasob-test.git
   cd hasob-test
   ```
The repo contains 3 packages. Please navigate to the cloned repo and confirm the following:
- The composer.json file in dmo-savings-bond-portal contains local dependency on dmo-savings-bond-module and hasob-foundation-core-bs-5
- The composer.json file in dmo-savings-bond-module contains local dependency on dmo-savings-bond-module and hasob-foundation-core-bs-5

2. Install dependencies: Run composer install from inside hasob-foundation-core-bs-5 package and then from inside dmo-savings-bond-module, and then from inside dmo-savings-bond-portal. This should resolve your package dependencies.
   ```
   composer install
   ```

3. Copy the `.env.example` file to `.env` and configure your environment variables from inside dmo-savings-bond-portal, ensure you have setup your local database:
   ```
   cp .env.example .env
   ```

4. Generate an application key from inside dmo-savings-bond-portal:
   ```
   php artisan key:generate
   ```

5. Run database migrations: Migrate to setup your tables in the database, from inside dmo-savings-bond-portal.
   ```
   php artisan migrate
   ```

6. (Optional) Seed the database with sample data from inside dmo-savings-bond-portal:
   ```
   php artisan db:seed
   ```

7. Start the development server: Finally, run php artisan serve from inside dmo-savings-bond-portal to start the application
   ```
   php artisan serve
   ```
8. The application should be running on your localhost at
   ```
   http://127.0.0.1:8000
   ```
9. Please login with the following credentials:
- Email: admin@app.com
- Password: password

## Running Tests

To run the feature tests:

```
php artisan test
```
Don't forget to migrate your database table again after running tests.
