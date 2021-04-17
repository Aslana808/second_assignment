<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $post = Post::all();
        return view('posts.index', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function show($id){
        $post = Post::findorfail($id);
        return view('posts.show', compact('post'));
    }

    public function store(Request $request){
        Post::create([
            'Title' => $request->get('Title'),
            'Author_name' => $request->get('Author_name'),
            'Post_text' => $request->get('Post_text')
        ]);
        return redirect()->back();
    }

    public function edit($id){
        $post = Post::findorfail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id){
        $post = Post::findorfail($id);
        $post->update($request->all());
        return redirect()->back();
    }

    public function destroy($id){
        $post = Post::findorfail($id);
        $post->delete();
        return redirect()->back();
    }
}
