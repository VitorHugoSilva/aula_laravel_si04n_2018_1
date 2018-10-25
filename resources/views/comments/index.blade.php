@extends('adm.template_adm')

@section('title-page')
Pagina de posts
@endsection

@section('content')
    <div class="row">
      <div class="col-md-12">
        <a href="{{ route('posts.create') }}" class="btn btn-success"> New </a>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <a href="{{ route('posts.show',[$post->id]) }}" class="btn btn-secondary">
                        Show
                        </a>

                        <a href="{{ route('comments.create',[$post->id]) }}" class="btn btn-primary">
                        Add comment
                        </a>                        <a href="{{ route('posts.edit',[$post->id]) }}" class="btn btn-light">Edit</a>
                        <form action="{{ route('posts.destroy',[$post->id]) }}" class="d-inline" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
      </div>
    </div>
@endsection