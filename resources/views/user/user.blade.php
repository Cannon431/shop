@extends('layouts.layout')
@section('title') Аккаунт @endsection
@section('content')
    <h1>Здравствуйте, {{ Auth::user()->name }}!</h1>
    <a href="{{ url('cart') }}">Корзина</a> ({{ $cartCount }})<br>
    <a href="{{ url('account/edit-form') }}">Изменить профиль</a>
@endsection