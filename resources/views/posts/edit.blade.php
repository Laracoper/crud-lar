@extends('layout.main')
@section('title','update posts')

@section('content')
<h1>update posts</h1>
<form action="{{ route('posts.update',[$post->id]) }}" method="post" >
    @csrf
    @method('put')
    <input type="text" placeholder="title" name="title" class="form-control mb-3" value="{{ old('title') }}">
    <textarea name="content" placeholder="message" class="form-control mb-3"></textarea>
    <button type="submit" class="btn btn-warning">edit</button>
</form>
@endsection

