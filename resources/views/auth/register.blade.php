@extends('layouts.layout')
@section('title') Регистрация @endsection
@section('content')
<div class="col-sm-4 col-sm-offset-2">
    <div class="signup-form"><!--sign up form-->
        <h2>Регистрация</h2>
        <form action="{{ route('register') }}" method="POST">
            {{ csrf_field() }}

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            <input type="text" name="name" placeholder="Имя" value="{{ old('name') }}">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <input type="password" name="password" placeholder="Пароль">
            <input type="password" name="password_confirmation" placeholder="Повторите пароль">
            <button type="submit" class="btn btn-default">Зарегестрироваться</button>
        </form>
    </div><!--/sign up form-->
    <br>
</div>

@endsection
