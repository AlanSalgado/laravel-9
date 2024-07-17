<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware("auth", ['except' => ['index', 'show']]);
    }

    public function index(){
        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id){
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    public function create(){

        return view('posts.create', ['post' => new Post]); 
    }

    public function store(Request $request){
        $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required'],
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        /*
        Post::create([
            'title' => $request->input('title'),
            'body'=> $request->input('body'),
        ]);*/

        session()->flash('status','Post creado');
        return redirect()->route('posts.index');
    }

    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }  

    public function update(Request $request, $id){
        $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required'],
        ]);
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        session()->flash('status','Post actualizado');
        return redirect()->route('posts.show', $id);
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        session()->flash('status','post eliminado');
        return redirect()->route('posts.index');
    }
}
