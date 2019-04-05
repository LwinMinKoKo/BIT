@extends('layouts.master')

@section('title','Patient_Table_Create')

@section('content')


<div class="container">
	<div class="col-md-12">
		<h1 align="center">Patient Registration Form</h1>
	</div></hr></br></br><br><br></br>
	

	<div class="row-md-12">
		<div class="col-md-6">

			<form role="form" method="post" action="{{route('patients.store')}}" >
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="patientname">Patient Name</label>
					<input type="text" class="form-control" name="patientname"  />


				</div>


				<div class="form-group ">
					<label for="quantity">Phone No</label>
					<input type="text" class="form-control" name="phoneno"/>

				</div>

				<div class="form-group">
					<label for="quantity">Address</label>
					<input type="text" class="form-control" name="address"/>

					
				</div>

				<div class="form-group">
					<label for="quantity">User Name</label>
					<input type="text" class="form-control" name="username"/>

				</div>

			</div><!---end of col1--->


			<div class="col-md-6">
				<div class="form-group ">
					<label for="price">Father Name</label>
					<input type="text" class="form-control" name="fathername"/>
					
				</div>

				<div class="form-group">
					<label for="quantity">E-mail</label>
					<input type="email" class="form-control" name="email" placeholder="Example@mail.com" />


				</div>

				<div class="form-group">
					<label for="inputState">Blood Type</label>
					<select id="inputState" class="form-control" name="bloodtype">
						<option selected>Choose...</option>
						<option>A+</option>
						<option>B+</option>
						<option>AB+</option>
						<option>O+</option>
						<option>A</option>
						<option>B</option>
						<option>O</option>
					</select>



				</div>

				<div class="form-group">
					<label for="quantity">Password</label>
					<input type="password" class="form-control" name="password"/>

					
				</div>

				<div class="col-md-12" align="right">
					<button type="submit" class="btn btn-primary">Register</button>
					<button type="reset" class="btn btn-danger">Cancel</button>
				</div>	

			</form>
			
		</div><!------end of col2----->	
	</div><!---end of row---->
</div><!---end of container-->
@endsection