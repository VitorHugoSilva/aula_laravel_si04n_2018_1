@extends('adm.template_adm')

@section('title-page')
Pagina de posts - show
@endsection

@section('content')
<div class="row">
      <div class="col-md-12">
            <table class="table table-bordered table-hover table-striped">
                  <tr>
                        <th>ID</th>
                        <th>{{ $post->id }}</th>
                  </tr>
                  <tr>
                        <th>Title</th>
                        <th>{{ $post->title }}</th>
                  </tr>
                  <tr>
                        <th>Content</th>
                        <th>{{ $post->content }}</th>
                  </tr>
            </table>
            <a href="{{ route('posts.index') }}" class="btn btn-light">Voltar</a>
      </div>
</div>
@endsection