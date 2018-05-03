<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $table = 'cart';

    public static function add($userId, $goodId, $quantity)
    {
        $cart = new Cart();

        $cart->user_id = $userId;
        $cart->good_id = $goodId;
        $cart->quantity = $quantity;

        $cart->save();
    }

    public static function deleteFromCart($id)
    {
        Cart::destroy($id);
    }

    public static function count($userId)
    {
        return Cart::selectRaw('COUNT(cart.id) as count')
            ->from('cart')
            ->where('user_id', '=', $userId)
            ->first()->count;
    }

    public static function inCart($userId, $goodId)
    {
        return Cart::selectRaw('COUNT(cart.id) as count')
            ->from('cart')
            ->where([['user_id', '=', $userId], ['good_id', '=', $goodId]])
            ->first()
            ->count != 0;
    }

    public static function getCart($userId, $goodId)
    {
        return Cart::where([
            ['user_id', '=', $userId],
            ['good_id', '=', $goodId]
        ])->first();
    }

    public static function getTotalValue($carts)
    {
        $value = 0;

        foreach ($carts as $cart) {
            if ($cart->good->is_available) {
                $value += $cart->good->price * $cart->quantity;
            }
        }

        return $value;
    }

    public static function updateQuantity($cartId, $quantity)
    {
        $cart = Cart::find($cartId);

        if ($quantity < 0) {
            $quantity = 1;
        }

        if ($quantity != $cart->quantity) {
            $cart->quantity = $quantity;
            $cart->save();
        }
    }

    public static function getCarts($userId)
    {
        return Cart::where('user_id', '=', $userId)
            ->orderBy('id', 'desc')
            ->get();
    }

    public function good()
    {
        return $this->belongsTo('App\Goods');
    }
}
