@extends('adm.template_adm')

@section('title-page')
Pagina de posts - edit
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="{{ route('posts.update', [$post->id]) }}" method="POST">
    	 @method('PUT')
    	 @csrf
            <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control
          @if($errors->get('title'))
            is-invalid
          @endif"
          value="{{ old('title',$post->title) }}">
        @if($errors->get('title'))
          <div class="invalid-feedback">
            {{ $errors->get('title')[0] }}
          </div>
        @endif
      </div>
       <div class="form-group">
        <label for="">Content</label>
        <textarea name="content" id="" rows="5" class="form-control
         @if($errors->get('content'))
          is-invalid
          @endif">{{ old('content', $post->content) }}</textarea>
          @if($errors->get('content'))
          <div class="invalid-feedback">
            {{ $errors->get('content')[0] }}
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