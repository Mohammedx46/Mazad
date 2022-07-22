<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Auctions;
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

        $user = User::factory(2)->create();
        
        $category = ProductCategories::factory(4)->create([
        'category_name'=>'cars',
        'category_description'=>'cars are the best'
        ]);
        
        $product = Products::factory(5)->create([
            'productcategory_id' => $category[2]->id
        ]);

        ProductDocuments::factory(5)->create([
            'products_id' => $product[2]->id
        ]);

        ProductImages::factory(5)->create([
            'products_id' => $product[2]->id
        ]);

        $auction = Auctions::factory(5)->create([
            'products_id' => $product[2]->id
        ]);

        AuctionUsers::factory(5)->create([
            'auctions_id' => $auction[2]->id,
            'user_id' => $user[0]->id
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
