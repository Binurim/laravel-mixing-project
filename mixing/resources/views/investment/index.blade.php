@extends('layouts.app')

@section('content-title', 'Investment')
@section('content-subtitle', 'Fixed Deposit')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Investment</h3>
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
                                <a href="{{url('add-investment')}}"><button class="btn btn-success">+ Add Investment</button>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table table-bordered">
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

                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection