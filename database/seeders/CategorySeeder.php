<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::factory(3)->create();

        Product::factory(5)->create()->each(function ($product) {
            $categories = Category::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $product->categories()->attach($categories);
            $product->productGallery()->create([
                "product_id" => $product->id , 
                'image' => "https://bizweb.dktcdn.net/100/414/728/products/1-001c271a-8322-4c31-a0c4-0ed30dd941eb.jpg?v=1718003560160"
            ]);
            $product->productGallery()->create([
                "product_id" => $product->id , 
                'image' => "https://bizweb.dktcdn.net/100/414/728/products/3-3769a449-2b96-4416-85be-7c448e74af6c.jpg?v=1718003581763"
            ]);
        });
    }
}
