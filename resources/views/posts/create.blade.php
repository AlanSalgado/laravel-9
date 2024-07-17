@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <h1>Crear nuevo post</h1>
        <form method="post" action="{{ route('posts.store') }}">
            @csrf
            @include('posts.form-fields')
            <button class="btn btn-success" type="submit">Enviar</button>
            <a class="btn btn-danger" href="{{ route('posts.index') }}">Regresar</a>
        </form>
    </div>
@endsection

