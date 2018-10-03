@extends('adm.template_adm')

@section('title-page')
Pagina de posts
@endsection

@section('content')
    <div class="row">
      <div class="col-md-12">
      	<table class="table table-bordered table-hover table-striped">
      		<tr>
      			<th>ID</th>
      			<th>Title</th>
      			<th>Content</th>
      		</tr>
      		@foreach($posts as $post)
      		<tr>
      			<td>{{ $post->id }}</td>
      			<td>{{ $post->title }}</td>
      			<td>{{ $post->content }}</td>
      		</tr>
      		@endforeach
      	</table>
      </div>
    </div>
@endsection