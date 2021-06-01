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
                <a class="text-white" href="{{ route('post.edit',[ 'id' => $post->id]) }}">変更する</a>
            </button>
            <form method="POST" action="{{ route('post.destroy',[ 'id' => $post->id ]) }}" id="delete_{{ $post->id }}">
                @csrf
                <a href="#" class="btn btn-danger" data-id="{{ $post->id }}" onclick="deletePost(this);">削除する</a>
            </form>
        </div>
    </div>
</div>
<script>
    function deletePost(e){
        'use strict';
        if(confirm('本当に削除して良いのか')){
            document.getElementById('delete_'+e.dataset.id).submit();
        }
    }
</script>
@endsection