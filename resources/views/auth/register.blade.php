@extends('layouts.app')

@section('title')
    Registro
@endsection

@section('content')
    <div class="container mt-4">
        <h1>Registro</h1>
        <form method="post" action="{{ route('register') }}">
            @csrf
            <div class="">
                <div class="mb-3 col-5">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" autofocus="autofocus">
                    @error('name')
                        <br>
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 col-5">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control">
                    @error('email')
                        <br>
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 col-5">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                        <br>
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 col-5">
                    <label for="password_confirmation" class="form-label">Confirmacion de contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control">
                    @error('password_confirmation')
                        <br>
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <button class="btn btn-success" type="submit">Registrar</button>
            <a class="btn btn-danger" href="{{ route('login') }}">Volver</a>
        </form>
    </div>
@endsection