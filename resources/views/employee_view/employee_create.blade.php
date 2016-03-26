@extends('master_employee')

@section('content')
	 <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
				
				@foreach ($errors->all() as $error)
					<p class="alert alert-danger">{{ $error }} </p>
				@endforeach
				
				<input type="hidden" name="_token" value="{!! csrf_token() !!}" >
                <fieldset>
                    <legend>Create a new employee</legend>
                    <div class="form-group">
                        <label for="e_first_name" class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="e_first_name" name="e_first_name" placeholder="Your First Name" >
                        </div>
						
						<label for="e_last_name" class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="e_last_name" name="e_last_name" placeholder="Your Last Name">
                        </div>
						
						<label for="e_password" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="e_password" name="e_password" placeholder="Choose your password">
                        </div>
						
						<label for="e_phone" class="col-lg-2 control-label">Phone Number:</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="e_phone" name="e_phone" placeholder="1234567890">
                        </div>
						
						<label for="e_email" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="e_email" name="e_email" placeholder="Your Email">
                        </div>
						
						<label for="e_street" class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="e_street" name="e_street" placeholder="123 Avenue Rd">
                        </div>
						
						<label for="e_city" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="e_city" name="e_city" placeholder="">
                        </div>
						
						<label for="e_state" class="col-lg-2 control-label">State</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="e_state" name="e_state" placeholder="">
                        </div>
						
						<label for="e_zip" class="col-lg-2 control-label">Zip Code</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="e_zip" name="e_zip" placeholder="">							
                        </div>						
						
						
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content"></textarea>
                            <span class="help-block">Feel free to ask us any question.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@stop