<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Roles;
use App\Models\Auctions;
use App\Models\Contacts;
use App\Models\Products;
use App\Models\AuctionUsers;
use App\Models\ProductImages;
use Illuminate\Database\Seeder;
use App\Models\ProductDocuments;
use App\Models\ProductCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory(30)->create();

        Roles::factory(1)->create(
            ['role_name' => 'admin']
        );

        Roles::factory(1)->create(
            ['role_name' => 'manager']
        );

        Roles::factory(1)->create(
            ['role_name' => 'user']
        );
        
        Contacts::factory(5)->create();

        ProductCategories::factory(4)->create();
        
        
        $product = Products::factory(8)->create();

        ProductDocuments::factory(5)->create();

        ProductImages::factory(5)->create([
            'products_id' => $product[2]->id
        ]);

        $auction = Auctions::factory(5)->create();

        AuctionUsers::factory(5)->create([
            'auction_id' => $auction[2]->id,
            'user_id' => $user[0]->id
        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
