@extends('layouts.master')
@section('metalinks')
    @include('layouts.metalinks')
@stop
@section('content')
    <div class="col-md-8 col-md-offset-2">
        <h3>{{$role_name->name}} {{$user->name}} Permissions</h3>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Permissions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user_permissions as $user_permission)
                <tr>
                    <td>{{$user_permission->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop