<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Cart;

class CartController extends Controller
{
    const EMAIL = 'b270337ac8-b41f76@inbox.mailtrap.io';

    public function cart()
    {
        $carts = Cart::getCarts(Auth::id());
        $totalValue = Cart::getTotalValue($carts);

        return view('cart', [
            'notNeedCategories' => true,
            'cartCount' => Cart::count(Auth::id()),
            'carts' => $carts,
            'totalValue' => $totalValue
        ]);
    }

    public function add(Request $request)
    {
        Cart::add($request->userId, $request->goodId, $request->quantity);

        return back();
    }

    public function delete(Request $request)
    {
        Cart::deleteFromCart($request->cartId);

        return back();
    }

    public function updateQuantity(Request $request)
    {
        Cart::updateQuantity($request->cartId, $request->quantity);

        return back();
    }

    public function checkout()
    {
        $carts = Cart::getCarts(Auth::id());

        Mail::send(['html' => 'email.cart'], [
            'carts' => $carts,
            'userId' => Auth::id(),
            'userEmail' => Auth::user()->email,
            'userName' => Auth::user()->name
        ], function ($message) {
            $message->to(self::EMAIL);
            $message->from(self::EMAIL);
            $message->subject('Новый заказ!');
        });

        foreach ($carts as $cart) {
            $cart->delete();
        }

        return view('checkouted');
    }
}
