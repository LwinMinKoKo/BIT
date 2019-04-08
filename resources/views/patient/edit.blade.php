@extends('layouts.master')

@section('title','Patient_Registration_Form_Update')

@section('content')


<div class="container">
	<div class="col-md-12">
		<h1 align="center">Patient Registration Form Update</h1>
	</div></hr></br></br><br><br></br>
	

	<div class="row-md-12">
		<div class="col-md-6">

			<form role="form" method="post" action="{{route('patients.update',$patients->id)}}" value="patch">
				{!! csrf_field() !!}
				 {!! method_field('PATCH') !!}

				<div class="form-group">
					<label for="patientname">Patient Name</label>
					<input type="text" class="form-control" name="patientname"  value="{{$patients->patient_name}}"  />


				</div>


				<div class="form-group ">
					<label for="quantity">Phone No</label>
					<input type="text" class="form-control" name="phoneno" value="{{$patients->patient_phNo}}" />

				</div>

				<div class="form-group">
					<label for="quantity">Address</label>
					<input type="text" class="form-control" name="address" value="{{$patients->patient_address}}"/>

					
				</div>

				<div class="form-group">
					<label for="quantity">User Name</label>
					<input type="text" class="form-control" name="username" value="{{$patients->patient_user_name}}"/>

				</div>

			</div><!---end of col1--->


			<div class="col-md-6">
				<div class="form-group ">
					<label for="price">Father Name</label>
					<input type="text" class="form-control" name="fathername" value="{{$patients->patient_father_name}}"/>
					
				</div>

				<div class="form-group">
					<label for="quantity">E-mail</label>
					<input type="email" class="form-control" name="email" placeholder="Example@mail.com" value="{{$patients->patient_email}}" />


				</div>

				<div class="form-group">
					<label for="inputState">Blood Type</label>
					<select id="inputState" class="form-control" name="bloodtype" value="{{$patients->patient_blood_type}}">
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
					<input type="password" class="form-control" name="password"  value="{{$patients->patient_password}}"/>

					
				</div>

				<div class="col-md-12" align="right">
					<button type="submit" class="btn btn-primary">Update</button>
					<button type="reset" class="btn btn-danger">Cancel</button>
				</div>	

			</form>
			
		</div><!------end of col2----->	
	</div><!---end of row---->
</div><!---end of container-->
@endsection