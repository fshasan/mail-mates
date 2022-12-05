@extends('Romatoo.main')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-4">
		<div class="card">
		<div class="card-header">Registration</div>
		<div class="card-body">
			<form action="{{ route('validateRegistration') }}" method="POST">
				@csrf
				<div class="form-group mb-3">
					<input type="text" name="fname" class="form-control" placeholder="First Name" />
					@if($errors->has('fname'))
						<span class="text-danger">{{ $errors->first('fname') }}</span>
					@endif
				</div>
                <div class="form-group mb-3">
					<input type="text" name="lname" class="form-control" placeholder="Last Name" />
					@if($errors->has('lname'))
						<span class="text-danger">{{ $errors->first('lname') }}</span>
					@endif
				</div>
				<div class="form-group mb-3">
					<input type="text" name="email" class="form-control" placeholder="Email Address" />
					@if($errors->has('email'))
						<span class="text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				<div class="form-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password" />
					@if($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
				<div class="d-grid mx-auto">
					<button type="submit" class="btn btn-dark btn-block">Register</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection('content')