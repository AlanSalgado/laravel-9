@extends('layouts.app')

@section('title')
    Blog
@endsection

@section('content')
    @if (session('status'))
        <div class="status">
            {{ session('status') }}
        </div>
    @endif

    <div class="container mt-2">
        <h1>Blog</h1>

        @auth
            <a class="btn btn-success m-2 ms-0" href="{{ route('posts.create') }}">Crear nuevo post</a>
        @endauth

        <div class="container text-center mt-2">
            <div class="row justify-content-center">
                @foreach ($posts as $post)
                    <div class="col d-flex justify-content-center my-4">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/placeholder_image.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->body }}</p>
                                @auth
                                    <div class="row">
                                        <div class="col">
                                            <a class="btn btn-warning" href="{{ route('posts.edit', $post) }}">Editar</a>
                                        </div>
                                        <div class="col">
                                            <form action="{{route('posts.destroy', $post)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>  
                                            </form>
                                        </div>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection