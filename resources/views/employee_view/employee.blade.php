@extends('master_employee')

@section('content')
	<div class="container">
		
		@if (session('status'))
			<div class="alert alert-success">
			{{ session('status') }}
			</div>
		@endif
		<div class="container col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> Employee List </h2>
                </div>
				<a href="{!! url('/employee/create') !!}" class="btn btn-info"> Create a new employee </a>
                @if ($employees->isEmpty())
                    <p> There is no employee in our system.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
								<th>Phone Number </th>
								<th>Email </th>
								<th> Address </th>
								<th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{!! $employee->id !!} </td>
                                    <td>{!! $employee->e_first_name !!}</td>
                                    <td>{!! $employee->e_last_name !!}</td>
									<td>{!! $employee->e_phone !!}</td>
									<td>{!! $employee->e_email !!}</td>
									<td>{!! $employee->e_street !!},&nbsp; {!! $employee->e_city !!},&nbsp; {!! $employee->e_state !!},&nbsp; {!! $employee->e_zip !!}</td>									
									<td><a href="{!! action('employee_detail_controller@get_employee_detail', $employee->id) !!}" class="btn btn-info"> Detail </a> </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>
		
	
	</div>
	
@endsection