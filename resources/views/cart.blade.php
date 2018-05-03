@extends('layouts.layout')
@section('title') Корзина ({{ $cartCount }}) @endsection
@section('content')
@if(count($carts))
	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Товар ({{ $cartCount }})</td>
							<td class="description"></td>
							<td class="price">Стоимость</td>
							<td class="quantity">Количество</td>
							<td class="total">Всего</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					@foreach($carts as $cart)
						<tr>
							<td class="cart_product">
								<a href="{{ url('good/' . $cart->good->id) }}"><img src="{{ asset('/images/home/' . $cart->good->image) }}" width="110" height="110"></a>
							</td>
							<td class="cart_description">
								@if($cart->good->is_available)
									<h4><a href="{{ url('good/' . $cart->good->id) }}">{{ $cart->good->name }}</a></h4>
									<p>Код: {{ $cart->good->code }}</p>
								@else
									<h4><s><a href="{{ url('good/' . $cart->good->id) }}">{{ $cart->good->name }}</a></s></h4>
									<h5>Нет на складе</h5>
									<p>Код: {{ $cart->good->code }}</p>
								@endif
							</td>
							<td class="cart_price">
								<p>${{ $cart->good->price }}</p>
							</td>
								@if($cart->good->is_available)
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<input class="cart_quantity_input" type="text" name="quantity" value="{{ $cart->quantity }}" autocomplete="off" size="2">
										<a href="{{ url('cart/update-quantity?cartId=' . $cart->id) }}" class="change"><i class="fa fa-check" style="padding-top: 7px;"></i></a>
									</div>
								</td>
								@else
								<td class="cart_price" style="padding-left: 50px;">
									<p>{{ $cart->quantity }}</p>
								</td>
								@endif

							<td class="cart_total">
								@if($cart->good->is_available)
									<p class="cart_total_price">${{ $cart->good->price * $cart->quantity }}</p>
								@else
									<s><p class="cart_total_price">${{ $cart->good->price * $cart->quantity }}</p></s>
								@endif
							</td>
							<td class="cart_delete">
								<a href="{{ url('cart/delete?cartId=' . $cart->id) }}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			<h3>Общая стоимость: ${{ $totalValue }}</h3>
			@if($totalValue != 0)
				<form action="{{ url('cart/checkout') }}" method="post">
					{{ csrf_field() }}
					<div class="form-group col-md-1" style="margin-left: 55px;">
						<input type="submit" name="submit" class="btn btn-primary pull-right" value="Оформить заказ">
					</div>
				</form>
			@endif
		</div>

	</section> <!--/#cart_items-->
@else
	<h2>Корзина пуста</h2>
	<br>
@endif
<script>
	let links = document.getElementsByClassName('change');
	let quantities = document.getElementsByClassName('cart_quantity_input');

	for (let i = 0; i < links.length; i++) {
	    links[i].onclick = () => {
	      	 links[i].href += '&quantity=' + quantities[i].value;
		};
	}
</script>
@endsection