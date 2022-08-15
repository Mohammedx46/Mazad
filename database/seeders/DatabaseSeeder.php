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
use App\Models\Categories;
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

        

        Roles::factory(1)->create(
            ['role_name' => 'admin']
        );

        Roles::factory(1)->create(
            ['role_name' => 'manager']
        );

        Roles::factory(1)->create(
            ['role_name' => 'user']
        );
        
        $password = bcrypt(123);
        User::create([
            'role_id' => 3,
            'name' => 'جمال عبده حسن',					
            'last_name' => 'القاضي',
            'email' => 'jamal@gmail.com',
            'phone_number' => '775020407',
            'password' => $password,
            'user_status' => '1',
            'subscription_type' => '1',
            'insurance_amount' => '0',
            'is_bidding' => '0',
            'is_confirm_terms' => '1',
            'user_image_location' => 'storage/users/jamal.jpg',
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'رشيد قائد عبده',					
            'last_name' => 'الوصابي',
            'email' => 'rashid@gmail.com',
            'phone_number' => '771186772',
            'password' => $password,
            'user_status' => '1',
            'subscription_type' => '1',
            'insurance_amount' => '0',
            'is_bidding' => '0',
            'is_confirm_terms' => '1',
            'user_image_location' => 'storage/users/rashid.jpg',
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'محمد خالد محمد',					
            'last_name' => 'الحسني',
            'email' => 'mohmmedx46@gmail.com',
            'phone_number' => '774814450',
            'password' => $password,
            'user_status' => '1',
            'subscription_type' => '1',
            'insurance_amount' => '1',
            'is_bidding' => '0',
            'is_confirm_terms' => '1',
            'user_image_location' => 'storage/users/mohmmed.jpg',
        ]);
        // Contacts::factory(5)->create();

        Categories::factory(4)->create();
        
        
        $product = Products::factory(8)->create();

        Products::create([
            'categories_id' => 2 ,
		    'user_id' => 3,
        	'product_name' => 'سيارة هيلوكس',
        	'product_short_description' => 'سيار مخلوع الصدام',
        	'product_description' => 'مكسر مكسر مكسر',
        	'product_start_price' => 200,
        	'product_sell_now_price' => 400,
		    'product_quantity' => 1,
        	'auction_start_date' => '2022-8-15 08:02:00' ,
        	'auction_end_date' => '2022-8-18 08:02:00',
        	'product_main_image_location' => 'images/auction/cat1.png' ,
        	'is_product_sold' => 0,
        ]);

        ProductDocuments::factory(5)->create();

        ProductImages::factory(5)->create([
            'products_id' => $product[2]->id
        ]);

        $auction = Auctions::factory(5)->create();

        Auctions::create([
            'product_id' => 9,
            'auction_current_price' => 200,
            'auction_status' => 0,
        ]);
        AuctionUsers::factory(5)->create([
            'auction_id' => $auction[2]->id,
            'user_id' => 1
        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
