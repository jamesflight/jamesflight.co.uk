@extends('template')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="padding-sides-medium">
					<div class="spacer-2"></div>
					@include('post', array('post', $post))
				</div>
			</div>
		</div>
	</div>
@endsection