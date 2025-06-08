@extends('layout.main')
@section('title','create posts')

@section('content')
<h1>create posts</h1>
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" placeholder="title" name="title" class="form-control mb-3">
    <textarea name="content" placeholder="message" class="form-control mb-3"></textarea>
    <button type="submit" class="btn btn-warning">send</button>
</form>
@endsection