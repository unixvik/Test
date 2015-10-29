@extends('layout.master')

@section('content')



    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="title lato white xlarge ">Welcome {{ $user->username or 'Guest'}}</div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
