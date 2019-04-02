@extends('layouts.master')
@section('title','Patient_Registration')
@section('content')

<div class="container">
	<div class="row">
		<div class="col mt-5">
			
			<h1> Template is OK</h1>
			<a href="{{route('patients.create') }}" class="btn btn-primary">Create</a>


		</div>
	</div>
</div>
@endsection
