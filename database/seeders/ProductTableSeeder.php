<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'imagePath'=>'https://cdn.tgdd.vn/Products/Images/42/246196/Samsung-Galaxy-A53-xanh-thumb-600x600.jpg',
            'title'=>'Samsung Galaxy A53',
            'description'=> '5G 128GB',
            'price'=>500
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagePath'=>'https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Burgundy-600x600.jpg',
            'title'=>'Samsung Galaxy S22 Ultra',
            'description'=> '125GB',
            'price'=>1000
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagePath'=>'https://cdn.tgdd.vn/Products/Images/42/251856/samsung-galaxy-a03-xanh-thumb-600x600.jpg',
            'title'=>'Samsung Galaxy A03',
            'description'=> '3GB',
            'price'=>350
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagePath'=>'https://cdn.tgdd.vn/Products/Images/42/274359/samsung-galaxy-a23-xanh-thumb-600x600.jpg',
            'title'=>'Samsung Galaxy A23',
            'description'=> '6GB',
            'price'=>500
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagePath'=>'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/thumbnail/9df78eab33525d08d6e5fb8d27136e95/s/a/samsung-galaxy-a52-26.jpg',
            'title'=>'Samsung Galaxy A52',
            'description'=> '8GB',
            'price'=>600
        ]);
        $product->save();

    }
}
