<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(4)
            ->hasVariants(5)
            ->has(Image::factory(3)->sequence(fn (Sequence $sequence) => ['featured' => $sequence->index % 3 === 0]))
            ->create();
    }
}
