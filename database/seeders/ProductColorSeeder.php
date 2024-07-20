<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductColor;
class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = ["đỏ" , "trắng" , "đen"];
        foreach ($colors as $color){
            ProductColor::create(
                [
                    "name" => $color
                ]
            );
        }
    }
}
