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
        <form action="{{ route('post.update', ['id' => $post->id]) }}" method="POST">
            @csrf
            <div class="form-group">
            <textarea class="form-control" name="content" cols="30" rows="10">{{ $post->content}}</textarea>

            </div>
            <button type="submit" class="btn btn-primary">更新する</button>
        </form>
        </div>
    </div>
</div>
@endsection