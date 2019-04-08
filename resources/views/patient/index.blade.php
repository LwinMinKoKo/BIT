@extends('layouts.master')

@section('title','Patient_List')

@section('content')


<div class="container">
	<div class="row">
		<div class="col mt-5">
			
			<h1> Template is OK</h1>
			<a href="{{route('patients.create')}}" class="btn btn-primary">Create</a>
			<hr>
			<div class="table-responsive">
				<table class="table ">
					<thead>
						@if($patients -> count() > 0)

						<tr class="bg-primary">
							<td>Patient ID</td>
							<td>Name</td>
							<td>E-mail</td>
							<td>Address</td>
							<td>Phone No</td>
							<td>Father Name</td>
							<td>Blood Type</td>
							<td>User Name</td>
							<td>Password</td>
							<td colspan="2" align="center">Action</td>
							
						</tr>					
						@endif
					</thead>

					<tbody>
						@foreach($patients as $patient)
						<tr class="">
							<td>{{$patient-> id}}</td>
							<td>{{$patient-> patient_name}}</td>
							<td>{{$patient-> patient_email}}</td>
							<td>{{$patient-> patient_address}}</td>
							<td>{{$patient-> patient_phNo}}</td>
							<td>{{$patient-> patient_father_name}}</td>
							<td>{{$patient-> patient_blood_type}}</td>
							<td>{{$patient-> patient_user_name}}</td>
							<td>{{$patient-> patient_password}}</td>
							<td>
								<a href="{{route('patients.edit',$patient->id)}}">
								<button class="btn btn-success btn-sm ">Update</button>
								</a>
							</td>
							<td>
								<form action="{{route('patients.destroy','id')}}">
									
									<button class="btn btn-danger btn-sm" onclick="return myfunction();">Delete</button></td>							
								</form>
							</tr>
							@endforeach
						</tbody>...
					</table>
				</div>






			<!-- <form>
				
				
				{!! csrf_field() !!}
			
			</form>
		-->


	</div>
</div>
</div>
@endsection
