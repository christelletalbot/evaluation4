@extends('layouts.default')
@section('content')
	
	<div class="container">
		<div class="d-flex flex-wrap justify-content-center">
			@foreach($hotels as $Room)
				<div class="d-flex col-3 m-1 border border-secondary">
					<span class="col-9 mt-2 mb-2">
						<p>{{ $Room->name }}</p>
						<p>{{ $Room->is_suite }}</p>
						<p>{{ $Room->price }}</p>
						<p>{{ $Room->reduced_mobility_access }}</p>
						<p>{{ $Room->bed_type_id }}</p>
					</span>
					<a href="/room/{{ $Room->id }}" class="col mt-2 mb-2" target="blank"><input type="button" value="voir"></a>
				</div>
			@endforeach
		</div>
	</div>
@stop					