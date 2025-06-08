@extends('layout.main')
@section('title','one post')

@section('content')
<h1>one post</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">{{$post->content }}</h6>
        <p class="card-text">{{ $post->created_at }}</p>
        <a class="btn btn-info" href="{{ route('posts.edit',$post->id) }}" class="card-link">edit</a>
         <!-- <form action="{{ route('posts.destroy',[$post->id]) }}" method="post">
            @csrf
            @method('put')
            <button class="btn btn-danger" type="submit">edit</button>
         </form> -->
         <form action="{{ route('posts.destroy',[$post->id]) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">delete</button>
         </form>

    </div>
</div>
@endsection