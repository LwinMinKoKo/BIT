@extends('layouts.master')

@section('title','Schedule_Table_Create')

@section('content')

<div class="container">
	<div class="row">
		<div class="col mt-5">

			<form role="formrole" class="form-group col-md-6" method="post" action="{{ruote('patient.store')}}">
				{!! csrf_field() !!}
				@csrf
				
				<div class="form-group col-md-6">
					<label for="inputState">State</label>
					<select id="inputState" class="form-control">
						<option selected>{{$doctor->name}}...</option>
						<option>...</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="inputState">State</label>
					<select id="inputState" class="form-control">
						<option selected>Choose...</option>
						<option>...</option>
					</select>
				</div>


				<div class="form-group col-md-12">
					<label for="inputAddress">Address</label>
					<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
				</div>	

				
				<div class="form-group col-md-12">
					<label for="inputAddress">Address</label>
					<input type="text" class="form-control" id="date">
				</div>	
				
	

				<div class="form-group col-md-12">
					<button type="submit" class="btn btn-primary">Save</button>
					<button type="reset" class="btn btn-primary">Cancel</button>
					
				</div>
			

		
	
			</form>
			
		</div>
		
				
	</div>
</div>