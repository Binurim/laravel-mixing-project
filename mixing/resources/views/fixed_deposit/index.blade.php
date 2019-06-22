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
        @if ($message = Session::get('success'))
                <div class="alert alert-success my-success-msg">
                    <p>{{ $message }}</p>
                </div>
        @endif
        <!-- Apply any bg-* class to to the info-box to color it -->

        <div class="container row">
            <div class="col-md-3 col-md-offset-8">
                <a href="{{url('add-fixed-deposit')}}"><button class="btn btn-success">+ Add Investment</button></a>
            </div>
        </div>
          <div class="row">
              <table class="table table-bordered">
                  <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Institute</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Tenor</th>
                      <th scope="col">Rate</th>
                      <th scope="col">Investment Date</th>
                      <th scope="col">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($fixedDeposits as $fixedDeposit)
                  <tr>
                      <th scope="row">{{ $fixedDeposit->id }}</th>
                      <td>{{ $fixedDeposit->institute_name }}</td>
                      <td>{{ $fixedDeposit->amount }}</td>
                      <td>{{ $fixedDeposit->tenor }}</td>
                      <td>{{ $fixedDeposit->rate }}</td>
                      <td>{{ $fixedDeposit->invest_at }}</td>
                      <td>
                          <a href="{{ url('/show-fixed-deposit/') }}/{{ $fixedDeposit->id }}"><button>Show</button></a>
                          <a href="{{ url('/edit-fixed-deposit/') }}/{{ $fixedDeposit->id }}"><button>Edit</button></a>
                          <a><button class="model-pop" type="button" data-toggle="modal" data-id="{{ $fixedDeposit->id }}" data-target="#myModal">Delete</button></a>
                      </td>
                  </tr>
                  @endforeach

                  </tbody>
              </table>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['method' => 'POST','route' => ['deleteFixedDeposit']]) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Please Confirm</h4>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this record ?
                <input type="hidden" id="id" name="id"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary delete-record">Delete</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection