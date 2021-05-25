@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>編集</h1>
        <p>{{ $post->user_id }}</p>
        <hr>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="form-group">
            <textarea class="form-control" name="content" cols="30" rows="10" placeholder="こちらに入力してください"></textarea>
            <input type="hidden" name="user_id" value="{{ $post->user_id }}">
            </div>
            <button type="submit" class="btn btn-primary">投稿する</button>
        </form>
        </div>
    </div>
</div>
@endsection