<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->words(3, true);
        
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'sku' => $this->faker->unique()->numerify('SKU-#####'),
            'img_thumbnail' => $this->faker->imageUrl(640, 480, 'products', true, 'Faker'),
            'price_regular' => $this->faker->randomFloat(2, 10, 1000),
            'price_sale' => $this->faker->optional(0.3)->randomFloat(2, 5, 500),
            'description' => $this->faker->optional()->sentence,
            'content' => $this->faker->optional()->paragraph,
            'material' => $this->faker->optional()->word,
            'user_manual' => $this->faker->optional()->paragraph,
            'views' => $this->faker->numberBetween(0, 1000),
            'is_active' => true,
            'is_hot_deal' => false,
            'is_good_deal' => false,
            'is_new' => false,
            'is_show_home' => false,
        ];
    }
}
