@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>投稿</h1>
        <p>{{ $user_id }}</p>
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
            <input type="hidden" name="user_id" value="{{ $user_id }}">
            </div>
            <button type="submit" class="btn btn-primary">投稿する</button>
        </form>
        
            {{-- <div class="card">
                <div class="card-header">投稿ページ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    show
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection