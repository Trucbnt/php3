<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $sizes = ProductSize::all();
        $colors = ProductColor::all();
        $products = Product::all();

        foreach ($products as $product) {
            $randomSize = $sizes->random(rand(1, 3))->pluck('id');
            $randomColor = $colors->random(rand(1, 3))->pluck('id');
            $product->productSize()->sync($randomSize);
            $product->productColor()->sync($randomColor);
        }
    }
}
