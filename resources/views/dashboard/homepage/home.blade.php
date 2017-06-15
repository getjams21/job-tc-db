@extends('layouts.master')
@section('metalinks')
    @include('layouts.metalinks')
@stop
@section('content')
    <div class="col-md-12">
        <div class="container">
            <h3>Welcome {{$user->name}}</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{$company->name}}</td>
                            <td>{{$company->address1}}</td>
                            <td>
                                <button class="btn btn-sm btn-success">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/companies"><button class="btn btn-lg btn-success">Create Company</button></a>
            <a href="/profile"><button class="btn btn-lg btn-primary">View Profile</button></a>
        </div>
    </div>
@stop