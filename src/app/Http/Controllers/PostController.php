<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ログインユーザーの情報をここからえる。
use Illuminate\Support\Facades\Auth;

// モデルのデータを使うためにモデルの名前空間をもってくる
use App\Models\Post;
// 一対多の関係のため、useモデルも名前空間も呼び出す
use App\User;

class PostController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $posts = Post::all();
        return view('post.index', compact('posts', 'user'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }
    public function create()
    {
        $user_id = Auth::id();
        return view('post.create', compact('user_id'));
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->user_id = $request->input('user_id');
        $post->content = $request->input('content');

        $post->save();
        return redirect('post/index');
    }
    public function update(Reauest $request, $id)
    {
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view("post.edit", compact('post'));
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->destroy();

        return view("post/index");
    }
}
