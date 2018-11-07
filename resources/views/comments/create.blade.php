@extends('adm.template_adm')

@section('title-page')
Comentário do post
@endsection

@section('content')

<div class="row">
  <div class="col-md-12">
      <h1>{{ $post->title }}</h1>
  </div>
  <div class="col-md-12">
      <p>{{ $post->content }}</p>
  </div>

  <div class="col-md-12">
    <hr>
    <h1>Comments</h1>
    <ul>
      @foreach($post->comments as $comment)
      <li>{{ $comment->comment }} ({{ $comment->created_at }})</li>

      @endforeach
    </ul>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <hr>
    <form action="{{ route('comments.store',[$post->id]) }}" method="POST">
    	 @csrf
       <div class="form-group">
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment" rows="5" class="form-control
        @if($errors->get('comment'))
            is-invalid
          @endif" autofocus></textarea>
          @if($errors->get('comment'))
          <div class="invalid-feedback">
            {{ $errors->get('comment')[0] }}
          </div>
        @endif
      </div>
      <div class="form-group">
           <input type="submit" class="btn btn-success">
           <a href="{{ route('posts.index') }}" class="btn btn-light">Cancelar</a>
      </div>
    </form>
  </div>
</div>
@endsection