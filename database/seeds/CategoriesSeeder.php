<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        $categories = [
            'Штаны', 'Футболки', 'Сумки', 'Рубашки', 'Головные уборы',
            'Обувь', 'Аксессуары', 'Платья', 'Кофты'
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category
            ]);
        }
    }
}
