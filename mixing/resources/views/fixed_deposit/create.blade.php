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
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        <!-- Apply any bg-* class to to the info-box to color it -->

          <div class="row">
              <div class="well">

                  {!! Form::open(['route' => 'saveFixedDeposit', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                  <fieldset>

                      <legend>Legend</legend>

                      <!-- Select With One Default -->
                      <div class="form-group">
                          {!! Form::label('select', 'institute_id', ['class' => 'col-lg-2 control-label'] )  !!}
                          <div class="col-lg-10">
                              {!!  Form::select('institute_id', $institutesArray,  'S', ['class' => 'form-control' ]) !!}
                          </div>
                      </div>

                      <!-- Tenor -->
                      <div class="form-group">
                          {!! Form::label('Tenor', 'Tenor:', ['class' => 'col-lg-2 control-label']) !!}
                          <div class="col-lg-10">
                              {!! Form::text('tenor', null, ['class' => 'form-control', 'placeholder' => 'Tenor']) !!}
                          </div>
                      </div>

                      <!-- Amount -->
                      <div class="form-group">
                          {!! Form::label('Amount', 'Amount:', ['class' => 'col-lg-2 control-label']) !!}
                          <div class="col-lg-10">
                              {!! Form::text('amount', null, ['class' => 'form-control', 'placeholder' => 'Amount']) !!}
                          </div>
                      </div>

                      <!-- Rate -->
                      <div class="form-group">
                          {!! Form::label('password', 'Rate', ['class' => 'col-lg-2 control-label']) !!}
                          <div class="col-lg-10">
                              {!! Form::text('rate', null, ['class' => 'form-control', 'placeholder' => 'Rate']) !!}
                          </div>
                      </div>

                      <!-- Investment Date -->
                      <div class="form-group">
                          {!! Form::label('password', 'Investment Date', ['class' => 'col-lg-2 control-label']) !!}
                          <div class="col-lg-10">
                              {!! Form::text('date', null, ['class' => 'form-control datepicker', 'placeholder' => 'Investment Date']) !!}
                          </div>
                      </div>


                      <!-- Submit Button -->
                      <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                              {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                          </div>
                      </div>

                  </fieldset>

                  {!! Form::close()  !!}
          </div>
      </div>
    </div>
  </div>
</div>
@endsection