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
        $start_date = $this->faker->dateTimeBetween('yesterday', '+5 days');
        $end_date = $this->faker->dateTimeBetween(
                        $start_date->format('Y-m-d H:i:s'),
                        $start_date->format('Y-m-d H:i:s').' +3 days');
        return [
            'categories_id' => random_int(1,4),
            'user_id' => 1,            
            'product_name' => $this->faker->word(),
            'product_short_description' => $this->faker->sentence(),
            'product_description' => $this->faker->paragraph(),
            'product_start_price' => random_int(100,400),
            'product_sell_now_price'=> random_int(150,450),
            'product_quantity' => random_int(1,5),
            'auction_start_date'=> $start_date,
            'auction_end_date'=> $end_date,
            'product_main_image_location' => 'images/auction/act'. random_int(1,5) .'.png',
            'is_product_sold' => 0,
        ];
    }
}
