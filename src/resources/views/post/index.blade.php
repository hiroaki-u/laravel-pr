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
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->user->name }}</td>
                        <td><a href="{{ route('post.show',[ 'id' => 1]) }}">{{ $post->content }}</a></td>
                        <td>{{ $post->updated_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <button class="btn btn-primary">
                        <a class="text-white" href="{{ route('post.create') }}">新規登録</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection