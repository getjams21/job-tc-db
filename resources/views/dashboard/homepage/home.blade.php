@extends('layouts.master')
@section('metalinks')
    @include('layouts.metalinks')
@stop
@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="container">
            <h3>Welcome {{$user->name}}</h3>
            <a href="/company/new"><button class="btn btn-lg btn-success">Create Company</button></a>
        </div>
    </div>
@stop