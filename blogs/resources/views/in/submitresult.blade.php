	@if(count($errors) > 0)
	<br></br>
		@foreach($errors->all() as $error)
			<div class="alert alert-danger">{{$error}}</div>
		@endforeach
	@endif