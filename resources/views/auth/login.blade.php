@extends('layouts.layout')
@section('title') Вход @endsection
@section('content')

<div class="col-sm-4 col-sm-offset-2">
    <div class="login-form"><!--login form-->
        <h2>Войти в аккаунт <small>(еще не <a href="{{ url('/register') }}">зарегестрированы?</a>)</small></h2>
        <form action="{{ route('login') }}" method="post">
            {{ csrf_field() }}
            <input type="email" placeholder="E-mail" name="email" value="{{ old('email') }}">
            <input type="password" placeholder="Пароль" name="password">
            <span>
                <input type="checkbox" class="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    Запомнить меня
                </span>
            <button type="submit" class="btn btn-default">Войти</button>
        </form>
    </div><!--/login form-->
    <br>
</div>

@endsection
