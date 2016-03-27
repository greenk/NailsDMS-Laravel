@extends('master_employee')

@section('content')
	<div class="container col-md-10 col-md-offset-1">
            <div class="well well bs-component">
                <div class="content">
                    <h2 class="header">{!! $employee->e_first_name !!} &nbsp; {!! $employee->e_last_name !!} </h2>
                    <p> Phone Number: {!! $employee->e_phone !!} </p>
                    <p> Email: {!! $employee->e_email !!} </p>
					<p> Address: {!! $employee->e_street !!},&nbsp; {!! $employee->e_city !!},&nbsp; {!! $employee->e_state !!},&nbsp; {!! $employee->e_zip !!} </p>
                </div>                
				<a href="{!! url('/employee') !!}" class="btn btn-warning"> Go Back </a>
				<a href="{!! url('/employee/edit', ['id' => $employee->id]) !!}" class="btn btn-info">Edit</a>
            </div>
    </div>


@endsection