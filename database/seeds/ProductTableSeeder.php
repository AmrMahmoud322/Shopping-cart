<?php

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
        $product = new \App\Product([
            'imagePath' => 'images/main.jpg' ,
            'title' => 'Harry poter1' ,
            'description' => 'this is description of this product 1.',
            'price' => 10.00
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/main.jpg' ,
            'title' => 'Harry poter2' ,
            'description' => 'this is description of this product 2.',
            'price' => 12.00
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/main.jpg' ,
            'title' => 'Harry poter3' ,
            'description' => 'this is description of this product 3',
            'price' => 13.00
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/main.jpg' ,
            'title' => 'Harry poter4' ,
            'description' => 'this is description of this product 4',
            'price' => 14.00
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/main.jpg' ,
            'title' => 'Harry poter5' ,
            'description' => 'this is description of this product 5',
            'price' => 15.00
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'images/main.jpg' ,
            'title' => 'Harry poter 6' ,
            'description' => 'this is description of this product 6',
            'price' => 16.00
        ]);
        $product->save();
    }
}
