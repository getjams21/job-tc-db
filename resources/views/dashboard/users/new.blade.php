@extends('layouts.master')
@section('metalinks')
    @include('layouts.metalinks')
@stop
@section('content')
    <div class="container">
    <div class="col-md-8 col-md-offset-2">
        {{ Form::open(['route' => 'createUser']) }}
            <h2>Registration Form</h2>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Full Name</label>
                <div class="col-sm-9">
                    <input type="text" id="name" name="name" placeholder="Full Name" class="form-control" autofocus>
                    <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="country" class="col-sm-3 control-label">Country</label>
                <div class="col-sm-9">
                    <select id="country" class="form-control">
                        @foreach($Countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div> <!-- /.form-group --> --}}
            {{-- <div class="form-group">
                <label class="control-label col-sm-3">Gender</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="femaleRadio" value="Female">Female
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="maleRadio" value="Male">Male
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="uncknownRadio" value="Unknown">Unknown
                            </label>
                        </div>
                    </div>
                </div>
            </div> <!-- /.form-group --> --}}
            {{-- <div class="form-group">
                <label class="control-label col-sm-3">Meal Preference</label>
                <div class="col-sm-9">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="calorieCheckbox" value="Low calorie">Low calorie
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="saltCheckbox" value="Low salt">Low salt
                        </label>
                    </div>
                </div>
            </div> <!-- /.form-group --> --}}
            {{-- <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">I accept <a href="#">terms</a>
                        </label>
                    </div>
                </div>
            </div> <!-- /.form-group --> --}}
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
            </div>
        {{ Form::close() }} <!-- /form -->
    </div> <!-- ./container -->
</div>
@stop