<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $start_date = $this->faker->dateTimeBetween('-2 months', '+1 months');
        $end_date = $this->faker->dateTimeBetween(
                        $start_date->format('Y-m-d H:i:s').' +3 days',
                        $start_date->format('Y-m-d H:i:s').' +3 days');
        return [
            'product_title' => $this->faker->word(),
            'product_short_description' => $this->faker->sentence(),
            'product_description' => $this->faker->paragraph(),
            'product_start_price' => '200',
            'bid_start_date'=> $start_date,
            'bid_end_date'=> $end_date,
            'product_main_image_location' => 'act1.png',
        ];
    }
}
