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
        $name = fake()->name();
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'description' => fake()->text(),
            'image' => fake()->imageUrl(640, 480, 'product', true),
            'price' => fake()->numberBetween(100, 10000),
            'stock' => fake()->randomDigit(),
            'slug' => $slug,
        ];
    }
}
