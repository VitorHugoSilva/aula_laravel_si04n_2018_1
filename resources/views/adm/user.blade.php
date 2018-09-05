@extends('adm.template_adm')

@section('title-page')
	adm - Users
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Estou em User</h1>

			@if(isset($user))
				{{ $user }}
			@endif

		</div>
	</div>
@endsection