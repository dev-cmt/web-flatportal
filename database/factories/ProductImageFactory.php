<?php

namespace Database\Factories;

use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImageFactory extends Factory
{
    protected $model = ProductImage::class;

    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'image_path' => $this->faker->imageUrl(),
        ];
    }
}
