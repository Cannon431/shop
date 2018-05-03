<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Cart;
use App\Goods;
use Illuminate\Support\Facades\Auth;

class GoodsController extends Controller
{
    public function item($id)
    {
        $good = Goods::getItem($id);
        $categoryId = $good->category_id;

        $cartCount = Cart::count(Auth::id());

        return view('product-details', compact(
            'good', 'categoryId', 'cartCount'
        ));
    }

    public function category($categoryId)
    {
        $category = Categories::where('id', '=', $categoryId)->limit(1)->first();
        if (!$category) {
            abort(404);
        }

        $goods = Goods::getGoodsByCategory($categoryId);
        $cartCount = Cart::count(Auth::id());

        return view('category', compact('category', 'goods', 'categoryId', 'cartCount'));
    }

    public function index()
    {
        $goods = Goods::getLastGoods(12);
        $recommended = Goods::getRecommendedGoods(6);
        $cartCount = Cart::count(Auth::id());

        return view('home', compact('goods', 'recommended', 'cartCount'));
    }

    public function catalog()
    {
        $goods = Goods::where('is_available', '=', true)
            ->orderBy('id', 'desc')
            ->paginate(15);
        $cartCount = Cart::count(Auth::id());

        return view('catalog', compact('goods', 'cartCount'));
    }
}
