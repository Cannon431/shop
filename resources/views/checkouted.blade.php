@extends('layouts.layout')
@section('title') Заказ зарегестрирован @endsection
@section('content')
    <h1>Ваш заказ был зарегестрирован!</h1>
    <p>Ваш заказ был успешно зарегестрирован, ждите входящего сообщения на вашу почту - {{ Auth::user()->email }}</p>
@endsection