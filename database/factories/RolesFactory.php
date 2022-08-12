<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Roles>
 */
class RolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $json = [

            "users" ,
            "auctions",
            "products",
            "categories" ,
        ];
        $json = json_encode($json);
        return [
            'permissions' =>  $json,
        ];
    }
}
