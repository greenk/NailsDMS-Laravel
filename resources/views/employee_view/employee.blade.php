@extends('master_employee')

@section('content')
	<div class="container">
		
		@foreach ($employees as $employee)
			<p>This is user {{ $employee->e_first_name }} {{ $employee->e_last_name }}</p>
		@endforeach	
	
	</div>
	
@endsection