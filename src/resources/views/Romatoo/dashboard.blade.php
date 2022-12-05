@extends('Romatoo.main')

@section('content')

<div class="card">
	<div class="card-header">Dashboard</div>
	<div class="card-body">
        <h4>Welcome {{$user->first_name}} {{$user->last_name}} !</h4>
	</div>
</div>

@endsection('content')