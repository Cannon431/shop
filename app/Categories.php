<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $timestamps = false;

    public static function getCategories()
    {
        return Categories::selectRaw('categories.name as name, COUNT(goods.id) as count, categories.id as id')
            ->from('goods')
            ->leftJoin('categories', 'categories.id', '=', 'goods.category_id')
            ->where('is_available', '=', true)
            ->groupBy('categories.name', 'categories.id')
            ->get();
    }
}
