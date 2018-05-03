@extends('layouts.layout')
@section('title') Изменить профиль @endsection
@section('content')
    <div class="col-sm-4 col-sm-offset-2">
        <div class="login-form"><!--login form-->
            <h2>Изменить профиль</h2>
            <form action="{{ url('/account/edit') }}" method="post">
                {{ csrf_field() }}
                <h4>Логин</h4> @if($errors->has('name')) {{ $errors->first('name') }} @endif
                <input type="text" placeholder="Логин" name="name" value="{{ Auth::user()->name }}">
                <h4>E-mail</h4> @if($errors->has('email')) {{ $errors->first('email') }} @endif
                <input type="email" placeholder="E-mail" name="email" value="{{ Auth::user()->email }}">
                <h4>Пароль</h4> @if($errors->has('password')) {{ $errors->first('password') }} @endif
                <input type="password" placeholder="Пароль" name="password">
                <button type="submit" class="btn btn-default">Изменить</button>
            </form>
        </div><!--/login form-->
        <br>
    </div>
@endsection