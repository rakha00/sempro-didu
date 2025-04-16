<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Semen Bital', 'Semen Dynamix', 'Semen Portland Pozzolan', 'Semen Portland Komposit', 'Semen Sika Grout'];

        foreach ($names as $name) {
            $slug = Str::slug($name);
            Product::create([
                'name' => $name,
                'description' => 'Description 1',
                'image' => 'images/' . $slug . '.webp',
                'price' => 100,
                'stock' => 10,
                'slug' => $slug,
            ]);
        }
    }
}
