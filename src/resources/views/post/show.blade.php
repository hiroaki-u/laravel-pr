@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ユーザー名</th>
                        <th scope="col">投稿内容</th>
                        <th scope="col">投稿日時</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->updated_at }}</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-primary">
                <a class="text-white" href="{{ route('post.edit',[ 'id' => 1]) }}">編集</a>
            </button>
        </div>
    </div>
</div>

@endsection