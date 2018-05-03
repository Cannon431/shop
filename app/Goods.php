<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    public static function getLastGoods($limit)
    {
        return Goods::where('is_available', '=', true)
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    }

    public static function getRecommendedGoods($limit = 3)
    {
        return Goods::where([
            ['is_recommended', '=', true],
            ['is_available', '=', true]
        ])
            ->limit($limit)
            ->get();
    }

    public static function getItem($id)
    {
        return Goods::where('id', '=', $id)->limit(1)->first();
    }

    public static function getGoodsByCategory($categoryId, $limit = 12)
    {
        return Goods::where([
            ['category_id', '=', $categoryId],
            ['is_available', '=', true]
        ])
            ->orderBy('id', 'desc')
            ->paginate($limit);
    }
}
