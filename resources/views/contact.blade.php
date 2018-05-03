@extends('layouts.layout')
@section('title') Связаться с нами @endsection
@section('content')
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Обратная связь</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" method="post" action="{{ url('send') }}">
                            {{ csrf_field() }}
                            <div class="form-group col-md-6">
                                @if ($errors->has('name'))
                                    {{ $errors->first('name') }}
                                @endif
                                <input type="text" name="name" class="form-control" placeholder="Ваше имя" value="{{ old('name') }}">
                            </div>
                            <div class="form-group col-md-6">
                                @if ($errors->has('email'))
                                    {{ $errors->first('email') }}
                                @endif
                                <input type="email" name="email" class="form-control" placeholder="Ваш E-mail" value="{{ old('email') }}">
                            </div>
                            <div class="form-group col-md-12">
                                @if ($errors->has('subject'))
                                    {{ $errors->first('subject') }}
                                @endif
                                <input type="text" name="subject" class="form-control" placeholder="Тема письма" value="{{ old('subject') }}">
                            </div>
                            <div class="form-group col-md-12">
                                @if ($errors->has('message'))
                                    {{ $errors->first('message') }}
                                @endif
                                <textarea name="message" id="message" class="form-control" rows="8" placeholder="Ваше сообщение">{{ old('message') }}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Отправить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/#contact-page-->
@endsection