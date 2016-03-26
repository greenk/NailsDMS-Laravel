@extends('master_employee')

@section('content')
	
	<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <fieldset>
                    <legend>Update Employee's Information</legend>
                    <div class="form-group">
                        <label for="first_name" class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{!! $employee->e_first_name !!}">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="last_name" class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{!! $employee->e_last_name !!}">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="phone" class="col-lg-2 control-label">Phone Number</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="phone" name="phone" value="{!! $employee->e_phone !!}">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="email" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="email" name="email" value="{!! $employee->e_email !!}">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="password" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="password" name="password" value="{!! $employee->e_password !!}">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="address" class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="address" name="address" value="{!! $employee->e_street !!}">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="city" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="city" name="city" value="{!! $employee->e_city !!}">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="state" class="col-lg-2 control-label">State</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="state" name="state" value="{!! $employee->e_state !!}">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="zipcode" class="col-lg-2 control-label">Zip Code</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="zipcode" name="zipcode" value="{!! $employee->e_zip !!}">
                        </div>
                    </div>
										

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <a href="{!! url('employee', [$employee->id]) !!}" class="btn btn-warning"> Cancel </a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>


@endsection