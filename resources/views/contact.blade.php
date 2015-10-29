@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="title lato white xlarge ">Contact {{ $user->username or 'Guest'}}</div>
        </div>
        <div class="col-md-2"></div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="title handwrite white ">{{{ $user->email or 'Guest' }}}</div></div>
            </div>
            <div class="col-md-2"></div>

    </div>

    @endsection