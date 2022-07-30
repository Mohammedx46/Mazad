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
            'category_name'=> 'cars,materials,properties',
            'category_image_location'=> 'cat1.png',
            'category_description'=>$this->faker->paragraph(),
        ];
    }
}
