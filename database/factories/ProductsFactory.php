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
            'product_name' => $this->faker->word(),
            'product_short_description' => $this->faker->sentence(),
            'product_description' => $this->faker->paragraph(),
            'product_start_price' => random_int(100,400),
            'product_sell_now_price'=> random_int(150,450),
            'product_quantity' => random_int(1,5),
            'bid_start_date'=> $start_date,
            'bid_end_date'=> $end_date,
            'product_main_image_location' => 'act'. random_int(1,5) .'.png',
            'productcategory_id' => random_int(1,4),
            'is_product_sold' => 0,
        ];
    }
}
