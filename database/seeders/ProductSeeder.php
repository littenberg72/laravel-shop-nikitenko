<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'title' => 'Lenovo ThinkPad X1 Carbon',
                'content' => 'Бизнес-ноутбук в лёгком и прочном корпусе',
                'category_id' => 1,
                'status_id' => 1,
                'price' => 134990,
                'old_price' => 0,
                'hit' => 0,
                'sale' => 0,
            ],

            [
                'title' => 'Google Pixel 8 Pro',
                'content' => 'Смартфон с лучшей камерой и чистым Android',
                'category_id' => 2,
                'status_id' => 2,
                'price' => 89990,
                'old_price' => 99990,
                'hit' => 0,
                'sale' => 1,
            ],

            [
                'title' => 'Samsung Galaxy Tab S9',
                'content' => 'Премиальный планшет с AMOLED-экраном и стилусом',
                'category_id' => 3,
                'status_id' => 1,
                'price' => 74990,
                'old_price' => 84990,
                'hit' => 1,
                'sale' => 1,
            ],
        ];

        foreach ($products as $product) {
            Product::forceCreate($product);
        }
    }
}