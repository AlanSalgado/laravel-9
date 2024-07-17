@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="container mt-4">
        <h1>Login</h1>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="">
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
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember">
                    <label class="form-check-label" for="flexCheckDefault">
                        Recuerdame
                    </label>
                </div>
                <br>
            </div>

            <button class="btn btn-success" type="submit">Iniciar sesion</button>
            <br><br>
            <a class="secondary-link link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{ route('register') }}">Crear cuenta</a>
        </form>
    </div>
@endsection