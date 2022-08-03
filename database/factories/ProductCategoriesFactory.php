<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategories>
 */
class ProductcategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_name'=> 'cars'. random_int(1,4),
            'category_image_location'=> 'cat'.random_int(1,5).'.png',
            'category_description'=>$this->faker->paragraph(),
        ];
    }
}
