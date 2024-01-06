@extends('Romatoo.main')

@section('content')

@include('Romatoo.components.style')

<div class="card">
	<div class="card-header">Dashboard</div>
	<div class="card-body">
        <h4>Hello {{$user->first_name}} {{$user->last_name}} !</h4>
		@include('Romatoo.components.compose')
	</div>
</div>

@if (request()->has('messageType') && request()->get('messageType') == "Inbox")
	<div class="card">
		<div class="card-header mt-4">
			@include('Romatoo.components.inboxFilter')
		</div>

		<div class="card-body mt-4">
			<h5>Welcome to Inbox. You have a total of {{$emails->count()}} messages.</h5>
			@include('Romatoo.components.inbox')
		</div>

	</div>

@elseif (request()->has('messageType') && request()->get('messageType') == "Drafts")
	<div class="card">
		<div class="card-header mt-4">
			@include('Romatoo.components.draftsFilter')
		</div>

		<div class="card-body mt-4">
			<h5>Welcome to Drafts. You have a total of {{$drafts->count()}} messages.</h5>
			@include('Romatoo.components.drafts')
		</div>


	</div>
	
@endif



@endsection('content')