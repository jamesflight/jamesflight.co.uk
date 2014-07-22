@extends('template')

@section('content')

<div class="container">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="margin-top-medium padding-sides-medium">

			@foreach($posts as $post)
				@include('post', array('post'=>$post))
			@endforeach
			</div>
		</div>
	</div>
</div>
@endsection