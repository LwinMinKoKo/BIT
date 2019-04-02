@extends('layouts.master')

@section('title','Schedule_Table')

@section('content')

<div class="container">
	<div class="row">
		<div class="col mt-5">

			@if(session('success'))
			<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>{{session('success')}}</strong>
			</div>
			@endif
			<a href="{{ route('schedules.create') }}" class="btn btn-primary">Create</a>
			<hr>

@if($schedules->count() > 0)
<table class="table table-striped">
	<thead>
					<tr>
						<th></th>
						<th></th>
						
						<th>Schedule ID</th>
						<th>Doctor Name</th>
						<th>Specialist</th>
						<th>Date</th>
						<th>Time</th>
						<th>Remark</th>
						

					</tr>
				</thead>


				<tbody>
					
					<!-- @foreach($doctors as $doctor) -->
					@foreach($schedules as $schedule)
					<tr>

						<!-- <td><a href="{{route('schedules.edit',$schedules->id)}}">
							<button class="btn btn-success">Edit</button>
						</a></td> -->

<!-- 						<td>
							<form method="post" action="{{ route('schedules.destroy', $Schedule->id) }}">
								@method('delete')
								@csrf
								<button type="submit" class="btn btn-danger" onclick="return myFunction();">Delete</button>
							</form>
						</td> -->
						

						<td>{{$schedule->id}}</td>
						<!-- <td>{{$doctor->name}}</td> --> 
						<!-- <td>{{$specialist->id}}</td> -->
						<td>{{$schedule->Date}}</td>
						<td>{{$schedule->Time}}</td>
						<td>{{$schedule->remark}}</td>
						
						
					</tr>
					@endforeach
					<!-- @endforeach -->
				</tbody>
</table>
@endif

@endsection