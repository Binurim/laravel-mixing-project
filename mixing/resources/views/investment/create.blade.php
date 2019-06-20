@extends('layouts.app')

@section('content-title', 'Investment')
@section('content-subtitle', 'Fixed-Deposit')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Dashboard</h3>
      </div>
      <div class="box-body">
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif

        <div class="row">
        <div class="well">

        {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}
 
 <fieldset>

     <legend>Legend</legend>

     <!-- Email -->
     <div class="form-group">
         {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
         <div class="col-lg-10">
             {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
         </div>
     </div>

     <!-- Password -->
     <div class="form-group">
         {!! Form::label('password', 'Password:', ['class' => 'col-lg-2 control-label']) !!}
         <div class="col-lg-10">
             {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!}
             <div class="checkbox">
                 {!! Form::label('checkbox', 'Checkbox') !!}
                 {!! Form::checkbox('checkbox') !!}
             </div>
         </div>
     </div>

     <!-- Text Area -->
     <div class="form-group">
         {!! Form::label('textarea', 'Textarea', ['class' => 'col-lg-2 control-label']) !!}
         <div class="col-lg-10">
             {!! Form::textarea('textarea', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
             <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
         </div>
     </div>

     <!-- Radio Buttons -->
     <div class="form-group">
         {!! Form::label('radios', 'Radios', ['class' => 'col-lg-2 control-label']) !!}
         <div class="col-lg-10">
             <div class="radio">
                 {!! Form::label('radio1', 'This is option 1.') !!}
                 {!! Form::radio('radio', 'option1', true, ['id' => 'radio1']) !!}

             </div>
             <div class="radio">
                 {!! Form::label('radio2', 'This is option 2.') !!}
                 {!! Form::radio('radio', 'option2', false, ['id' => 'radio2']) !!}
             </div>
         </div>
     </div>

     <!-- Select With One Default -->
     <div class="form-group">
         {!! Form::label('select', 'Select w/Default', ['class' => 'col-lg-2 control-label'] )  !!}
         <div class="col-lg-10">
             {!!  Form::select('select', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!}
         </div>
     </div>

     <!-- Select Multiple -->
     <div class="form-group">
         {!! Form::label('multipleselect[]', 'Multi Select', ['class' => 'col-lg-2 control-label'] )  !!}
         <div class="col-lg-10">
             {!!  Form::select('multipleselect[]', ['honda' => 'Honda', 'toyota' => 'Toyota', 'subaru' => 'Subaru', 'ford' => 'Ford', 'nissan' => 'Nissan'], $selected = null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
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
      

        <table class="table">
        <a href ="{{url('add-investment')}}"><button type="button" class="btn btn-primary">ADD +</button>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
@endsection
