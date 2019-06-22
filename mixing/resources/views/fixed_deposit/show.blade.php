@extends('layouts.app')

@section('content-title', 'Investment')
@section('content-subtitle', 'Fixed Deposit')

@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Fixed Deposit</h3>
      </div>
      <div class="box-body">

        <!-- Apply any bg-* class to to the info-box to color it -->

          <div class="row">
              <div class="well">

                  <fieldset>

                      <legend>Fixed Deposit</legend>

                          <!-- Select With One Default -->
                          <div class="form-group col-lg-6">
                              <div class="col-lg-4">
                                  <label class="control-label">Institute : </label>
                              </div>
                              <div class="col-lg-8">
                                  {{ $fixed_deposit->institute_name }}
                              </div>
                          </div>

                          <!-- Amount -->
                          <div class="form-group col-lg-6">
                              <div class="col-lg-4">
                                  <label class="control-label">Amount : </label>
                              </div>
                              <div class="col-lg-8">
                                  {{ $fixed_deposit->amount }}
                              </div>
                          </div>

                          <!-- Tenor -->
                          <div class="form-group col-lg-6">
                              <div class="col-lg-4">
                                  <label class="control-label">Tenor : </label>
                              </div>
                              <div class="col-lg-8">
                                  {{ $fixed_deposit->tenor }}
                              </div>
                          </div>

                      <!-- Rate -->
                          <div class="form-group col-lg-6">
                              <div class="col-lg-4">
                                  <label class="control-label">Rate : </label>
                              </div>
                              <div class="col-lg-8">
                                  {{ $fixed_deposit->rate }}
                              </div>
                          </div>

                      <!-- Investment Date -->
                      <div class="form-group col-lg-6">
                          <div class="col-lg-4">
                              <label class="control-label">Investment Date : </label>
                          </div>
                          <div class="col-lg-8">
                              {{ $fixed_deposit->invest_at }}
                          </div>
                      </div>

                  </fieldset>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection