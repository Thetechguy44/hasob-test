<!-- Organisation Field -->
<div id="div-organization" class="form-group">
    <label for="organization_id" class="col-lg-3 col-form-label"><b>Organization</b></label>
    <div class="col-lg-9">
        {!! Form::select('organization_id', $organizations, null, ['id' => 'organization_id', 'class' => 'form-control']) 
        !!}
    </div>
</div>

<!-- Status Field -->
<div id="div-status" class="form-group">
    <label for="status" class="col-lg-3 col-form-label"><b>Status</b></label>
    <div class="col-lg-9">
        {!! Form::text('status', null, ['id'=>'status', 'class' => 'form-control']) !!}
    </div>
</div>

<!-- Offer Title Field -->
<div id="div-offer_title" class="form-group">
    <label for="offer_title" class="col-lg-3 col-form-label"><b>Offer Title</b></label>
    <div class="col-lg-9">
        {!! Form::text('offer_title', null, ['id'=>'offer_title', 'class' => 'form-control']) !!}
    </div>
</div>

<!-- Start Price Per Unit Field -->
<div id="div-price_per_unit" class="form-group">
    <label for="price_per_unit" class="col-lg-3 col-form-label"><b>Price Per Unit</b></label>
    <div class="col-sm-9">
        {!! Form::number('price_per_unit', null, ['id'=>'price_per_unit', 'class' => 'form-control','min' => 0,'max' => 100000000]) !!}
    </div>
</div>
<!-- End Price Per Unit Field -->

<!-- Start Max Units Per Investor Field -->
<div id="div-max_units_per_investor" class="form-group">
    <label for="max_units_per_investor" class="col-lg-3 col-form-label"><b>Max Units Per Investor</b></label>
    <div class="col-sm-9">
        {!! Form::number('max_units_per_investor', null, ['id'=>'max_units_per_investor', 'class' => 'form-control','min' => 1,'max' => 1000000000]) !!}
    </div>
</div>
<!-- End Max Units Per Investor Field -->

<!-- Start Interest Rate Pct Field -->
<div id="div-interest_rate_pct" class="form-group">
    <label for="interest_rate_pct" class="col-lg-3 col-form-label"><b>Interest Rate Pct</b></label>
    <div class="col-sm-9">
        {!! Form::number('interest_rate_pct', null, ['id'=>'interest_rate_pct', 'class' => 'form-control','min' => 0,'max' => 100]) !!}
    </div>
</div>
<!-- End Interest Rate Pct Field -->

<!-- Offer Start Date Field -->
<div id="div-offer_start_date" class="form-group">
    <label for="offer_start_date" class="col-lg-3 col-form-label"><b>Offer Start Date</b></label>
    <div class="col-lg-9">
        <span class="text-muted">Insert date in this format YYYY-MM-DD (2000-12-01)</span>
        {!! Form::text('offer_start_date', null, ['id'=>'offer_start_date', 'class' => 'form-control']) !!}
    </div>
</div>

<!-- Offer End Date Field -->
<div id="div-offer_end_date" class="form-group">
    <label for="offer_end_date" class="col-lg-3 col-form-label"><b>Offer End Date</b></label>
    <div class="col-lg-9">
        <span class="text-muted">Insert date in this format YYYY-MM-DD (2000-12-01)</span>
        {!! Form::text('offer_end_date', null, ['id'=>'offer_end_date', 'class' => 'form-control']) !!}
    </div>
</div>

<!-- Offer Settlement Date Field -->
<div id="div-offer_settlement_date" class="form-group">
    <label for="offer_settlement_date" class="col-lg-3 col-form-label"><b>Offer Settlement Date</b></label>
    <div class="col-lg-9">
        <span class="text-muted">Insert date in this format YYYY-MM-DD (2000-12-01)</span>
        {!! Form::text('offer_settlement_date', null, ['id'=>'offer_settlement_date', 'class' => 'form-control']) !!}
    </div>
</div>

<!-- Offer Maturity Date Field -->
<div id="div-offer_maturity_date" class="form-group">
    <label for="offer_maturity_date" class="col-lg-3 col-form-label"><b>Offer Maturity Date</b></label>
    <div class="col-lg-9">
        <span class="text-muted">Insert date in this format YYYY-MM-DD (2000-12-01)</span>
        {!! Form::text('offer_maturity_date', null, ['id'=>'offer_maturity_date', 'class' => 'form-control']) !!}
    </div>
</div>

<!-- Tenor Years Field -->
<div id="div-tenor_years" class="form-group">
    <label for="tenor_years" class="col-lg-3 col-form-label"><b>Tenor Years</b></label>
    <div class="col-lg-9">
        {!! Form::text('tenor_years', null, ['id'=>'tenor_years', 'class' => 'form-control']) !!}
    </div>
</div>