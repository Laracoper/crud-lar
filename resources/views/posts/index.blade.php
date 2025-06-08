@extends('layout.main')
@section('title','all posts')

@section('content')
<h1>all posts</h1>
<p class="mb-3"><a href="{{ route('posts.create') }}">create post</a></p>
<div class="cards d-flex flex-wrap gap-3">
    @foreach($posts as $post)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{Str::limit($post->content,100,'.....')  }}</h6>
            <p class="card-text">{{ $post->created_at }}</p>
            <a href="{{ route('posts.show',$post->id) }}" class="card-link">читать...</a>
            
        </div>
    </div>
    @endforeach
</div>


<!-- <p class="mt-4 d-flex justify-content-center">{{ $posts->links() }}</p> -->
 {{ $posts->links() }}

@endsection