@extends('layouts.layout')
@section('title') {{ $good->name }} @endsection
@section('content')
    <div class="col-sm-9 padding-right">
        <div class="product-details"><!--product-details-->
            <div class="row">
                <div class="col-sm-5">
                    <div class="view-product">
                        <img src="{{ asset('images/home/' . $good->image) }}" alt=""/>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="product-information"><!--/product-information-->
                        @if($good->is_new)
                            <img src="{{ asset('images/product-details/new.jpg') }}" class="newarrival" alt=""/>
                        @endif
                        <h2>{{ $good->name }}</h2>
                        <p>Код товара: {{ $good->code }}</p>
                        <span>
                        <span>US ${{ $good->price }}</span>
                            @if($good->is_available)
                                    <form action="{{ url('cart/add') }}" method="post" style="display: inline">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="userId" value="{{ Auth::id() }}">
                                        <input type="hidden" name="goodId" value="{{ $good->id }}">
                                        <label>Количество:</label>
                                        <input type="text" value="1" name="quantity">
                                         <button type="submit" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            В корзину
                                        </button>
                                        </form>
                            @endif
                    </span>
                        <p><b>Наличие:</b> @if($good->is_available) На складе @else Нет на складе @endif</p>
                        @if($good->is_new)
                            <p><b>Состояние:</b> Новое</p>
                        @endif
                        <p><b>Производитель:</b> {{ $good->manufacturer }}</p>
                    </div><!--/product-information-->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h5>Описание товара</h5>
                    <p>{{ $good->description }}</p>
                </div>
            </div>
        </div><!--/product-details-->

    </div>
    <br/>
    <br/>
@endsection