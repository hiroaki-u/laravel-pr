@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <p>{{ $user->name }}</p>
                    @foreach($posts as $post)
                        {{ $post->content }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection