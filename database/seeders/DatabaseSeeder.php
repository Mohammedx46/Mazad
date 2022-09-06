<?php

namespace Database\Seeders;

use App\Models\Bill;
use App\Models\User;
use App\Models\Roles;
use App\Models\Auctions;
use App\Models\BillData;
use App\Models\Contacts;
use App\Models\Products;
use App\Models\Categories;
use App\Models\AuctionUsers;
use App\Models\ProductImages;
use Illuminate\Database\Seeder;
use App\Models\ProductDocuments;
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

        // ----------------- Roles -------------------
        // -------------------------------------------

        $admin = [
            "Users",
            "Products" ,
            "Categories",
            "Roles",
            "Auctions",
            "Control",
            "Admin",
            "Bills",
        ];
        $admin = json_encode($admin);

        $manager = [
            "Users",
            "Products" ,
            "Auctions",
            "Control",
        ];
        $manager = json_encode($manager);

        $user = [
            "Users",
            "Products" ,
            "Control",
        ];
        $user = json_encode($user);

        Roles::factory(1)->create(
            [
                'role_name' => 'admin', 
                'permissions' =>  $admin,
            ]
        );

        Roles::factory(1)->create(
            [
                'role_name' => 'manager',
                'permissions' =>  $manager,
            ]
        );

        Roles::factory(1)->create(
            [
                'role_name' => 'user',
                'permissions' =>  $user,
            ]
        );
        
        // ----------------- Users -------------------
        // -------------------------------------------

        $password = bcrypt(123);
        User::create([
            'role_id' => 2,
            'name' => 'جمال عبده حسن',					
            'last_name' => 'القاضي',
            'email' => 'jamal@gmail.com',
            'phone_number' => '775020407',
            'password' => $password,
            'user_status' => '1',
            'subscription_type' => '1',
            'insurance_amount' => '0',
            'joined_auctions' => '0',
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
            'joined_auctions' => '0',
            'is_bidding' => '0',
            'is_confirm_terms' => '1',
            'user_image_location' => 'storage/users/rashid.jpg',
        ]);

        User::create([
            'role_id' => 1,
            'name' => 'محمد خالد محمد',					
            'last_name' => 'الحسني',
            'email' => 'mohmmedx46@gmail.com',
            'phone_number' => '774814450',
            'password' => $password,
            'user_status' => '1',
            'subscription_type' => '1',
            'insurance_amount' => '1',
            'joined_auctions' => '0',
            'is_bidding' => '0',
            'is_confirm_terms' => '1',
            'user_image_location' => 'storage/users/mohmmed.jpg',
        ]);
        // Contacts::factory(5)->create();

        // ----------------- Categories --------------
        // -------------------------------------------
        Categories::create([
            'category_name' => 'سيارات',
            'category_description' => 'جميع أنواع العربات الناقلة بمختلف أحجامها',
            'category_image_location' => 'category_image_locations/cars.png',
        ]);

        Categories::create([
            'category_name' => 'الكترونيات',
            'category_description' => 'يمكن عرض وبيع جميع أنواع الإلكترونيات المرخصة حسب القانون',
            'category_image_location' => 'category_image_locations/electronics.jpg',
        ]);

        Categories::create([
            'category_name' => 'عقارات',
            'category_description' => 'يمكن عرض العقارات التي ليس عليها مشاكل أو توضح المشاكل بالتفصيل لمسوؤل الشوؤن القانونية, مع إرفاق جميع الوثائق المعتمدة.',
            'category_image_location' => 'category_image_locations/properties.jpg',
        ]);

        Categories::create([
            'category_name' => 'أخرى',
            'category_description' => 'يمكن عرض مختلف السلع والخدمات الموافقة للقانون',
            'category_image_location' => 'category_image_locations/others.jpg',
        ]);
        

        // ----------------- Products ----------------
        // -------------------------------------------
        Products::create([
            'categories_id' => 1 ,
		    'user_id' => 3,
        	'product_name' => 'هيلوكس',
        	'product_short_description' => 'تويوتا هيلوكس 2.7 Double Cab 4x2 M/T Top 2008 مستعملة',
        	'product_description' => 'سنة الصنع : 2008, عدد الكيلومترات : 400,000, سعة المحرك: 2700, ناقل الحركة: عادي, نوع الدفع/الجر: دفع خلفي, المواصفات الاقليمية: مواصفات دول مجلس التعاون الخليجي, نوع الوقود: بنزين, عدد السيلندر: 4, عدد الأبواب: 4',
        	'product_start_price' => 800000,
        	'product_sell_now_price' => 1802795,
		    'product_quantity' => 1,
        	'auction_start_date' => today()->format('Y-m-d h:m:s') ,
        	'auction_end_date' => today()->addDays(4)->format('Y-m-d h:m:s'),
        	'product_main_image_location' => 'product_main_image_locations/hailux2008.jpg' ,
        	'is_product_sold' => 0,
        ]);

        Products::create([
            'categories_id' => 2 ,
		    'user_id' => 3,
        	'product_name' => 'iPhone 13 Pro',
        	'product_short_description' => 'APPLE IPHONE 13 Pro 5G, اسود , 256GB',

        	'product_description' => 'يدعم الـ NFC .
            يأتي الهاتف بأبعاد 146.7×71.5×7.65 ملم مع وزن 203 جرام .
            يدعم الهاتف شريحتين إتصال من نوع Nano Sim و eSIM .
            يدعم شبكات الاتصال الجيل الثاني الـ 2G والجيل الثالث الـ 3G والجيل الرابع الـ 4G والجيل الخامس الـ 5G .
            متانة وجودة الخامات المستخدمة في تصنيع الهاتف تأتي من الزجاج مع إطار من الستانلس ستيل .
            يأتي الهاتف مقاوم للماء والغبار بشهادة الـ IP68 لتتمكن من وضع الهاتف في الماء حتى 6 متر لمدة 30 دقيقة .',

        	'product_start_price' => 150000,
        	'product_sell_now_price' => 274912,
		    'product_quantity' => 1,
        	'auction_start_date' => today()->format('Y-m-d h:m:s') ,
        	'auction_end_date' => today()->addDays(4)->format('Y-m-d h:m:s'),
        	'product_main_image_location' => 'product_main_image_locations/iphone13pro.png' ,
        	'is_product_sold' => 0,
        ]);

        Products::create([
            'categories_id' => 3 ,
		    'user_id' => 3,
        	'product_name' => 'بيت للبيع',
        	'product_short_description' => 'منزل في شملان صنعاء للبيع',
        	'product_description' => 'المنزل يتكون من دورين كل دور يتكون من مجلس وحمام منفصل وغرفتين وحمام ومطبخ وصاله يوجد خزان ارضى مساحه الأرض لبنتين نافذ لشارع 4متر ونافذ لشارع 12 متر قريب من جميع الخدمات خلف هايبر شملان السعر 55مليون ريال نهاية',
        	'product_start_price' => 35000000,
        	'product_sell_now_price' => 55000000,
		    'product_quantity' => 1,
        	'auction_start_date' => now()->addDays(8)->format('Y-m-d h:m:s') ,
        	'auction_end_date' => now()->addDays(12)->format('Y-m-d h:m:s'),
        	'product_main_image_location' => 'product_main_image_locations/house1.jpg' ,
        	'is_product_sold' => 0,
        ]);

        Products::create([
            'categories_id' => 1 ,
		    'user_id' => 1,
        	'product_name' => 'كيا أوبتيما 2015 مستعملة',
        	'product_short_description' => 'تويوتا هيلوكس 2.7 Double Cab 4x2 M/T Top 2008 مستعملة',
        	'product_description' => 'سنة الصنع: 2015, عدد الكيلومترات: 149,000, سعة المحرك: 2400, ناقل الحركة:أوتوماتيك, نوع الدفع/الجر: دفع امامي, المواصفات الاقليمية: مواصفات أمريكية, نوع الوقود: بنزين, عدد السيلندر: 4, عدد الأبواب: 4',
        	'product_start_price' => 700000,
        	'product_sell_now_price' => 1802795,
		    'product_quantity' => 1,
        	'auction_start_date' => today()->subDays(8)->format('Y-m-d h:m:s') ,
        	'auction_end_date' => today()->subDays(4)->format('Y-m-d h:m:s'),
        	'product_main_image_location' => 'product_main_image_locations/optima2015.jpg' ,
        	'is_product_sold' => 1,
        ]);

        Products::create([
            'categories_id' => 4 ,
		    'user_id' => 2,
        	'product_name' => 'ساعة سلفادور',
        	'product_short_description' => 'ساعة سلفادور ماركة',
        	'product_description' => 'ساعة رجالية ماركة سلفادور جديدة ونظيفة غير مستعمله سعرها الأساسي من 70410 إلى 105000 ريال يمني',
        	'product_start_price' => 15000,
        	'product_sell_now_price' => 35000,
		    'product_quantity' => 1,
        	'auction_start_date' => today()->addDays(15)->format('Y-m-d h:m:s') ,
        	'auction_end_date' => today()->addDays(18)->format('Y-m-d h:m:s'),
        	'product_main_image_location' => 'product_main_image_locations/watch1.jpg' ,
        	'is_product_sold' => 0,
        ]);

        // ----------------- Product Documents -------
        // -------------------------------------------
        ProductDocuments::create([
            'products_id' => '1',
            'product_document_location' => 'product_document_locations/hailux2008.txt',
        ]);

        ProductDocuments::create([
            'products_id' => '3',
            'product_document_location' => 'product_document_locations/house1.txt',
        ]);

        ProductDocuments::create([
            'products_id' => '4',
            'product_document_location' => 'product_document_locations/optima2015.txt',
        ]);

        // ----------------- Products Images ---------
        // -------------------------------------------

        // ----------------- هيلوكس Images ---------
        ProductImages::create([
            'products_id' => '1',
            'product_image_location' => 'product_image_locatoins/hailux2.jpg',
        ]);

        ProductImages::create([
            'products_id' => '1',
            'product_image_location' => 'product_image_locatoins/hailux3.jpg',
        ]);

        ProductImages::create([
            'products_id' => '1',
            'product_image_location' => 'product_image_locatoins/hailux4.jpg',
        ]);

        // ----------------- ايفون 13 برو Images ---------
        ProductImages::create([
            'products_id' => '2',
            'product_image_location' => 'product_image_locatoins/iphone13pro2.png',
        ]);

        ProductImages::create([
            'products_id' => '2',
            'product_image_location' => 'product_image_locatoins/iphone13pro3.jpg',
        ]);

        ProductImages::create([
            'products_id' => '2',
            'product_image_location' => 'product_image_locatoins/iphone13pro4.jpg',
        ]);

        // ----------------- بيت Images ---------
        ProductImages::create([
            'products_id' => '3',
            'product_image_location' => 'product_image_locatoins/house2.jpg',
        ]);

        ProductImages::create([
            'products_id' => '3',
            'product_image_location' => 'product_image_locatoins/house3.jpg',
        ]);

        ProductImages::create([
            'products_id' => '3',
            'product_image_location' => 'product_image_locatoins/house4.jpg',
        ]);

        // ----------------- اوبتيما سيارة Images ---------
        ProductImages::create([
            'products_id' => '4',
            'product_image_location' => 'product_image_locatoins/optima2.jpg',
        ]);

        ProductImages::create([
            'products_id' => '4',
            'product_image_location' => 'product_image_locatoins/optima3.jpg',
        ]);

        ProductImages::create([
            'products_id' => '4',
            'product_image_location' => 'product_image_locatoins/optima4.jpg',
        ]);

        // ----------------- ساعة Images ---------
        ProductImages::create([
            'products_id' => '5',
            'product_image_location' => 'product_image_locatoins/watch2.jpg',
        ]);

        ProductImages::create([
            'products_id' => '5',
            'product_image_location' => 'product_image_locatoins/watch3.jpg',
        ]);

        ProductImages::create([
            'products_id' => '5',
            'product_image_location' => 'product_image_locatoins/watch4.jpg',
        ]);
        

        // ----------------- Auctions ----------------
        // -------------------------------------------i

        // ----------------- هيلوكس ---------
        Auctions::create([
            'product_id' => '1',
            'auction_current_price' => '800000',
            'auction_status' => '0',
        ]);

        // ----------------- ايفون 13 برو ---------
        Auctions::create([
            'product_id' => '2',
            'auction_current_price' => '150000',
            'auction_status' => '0',
        ]);

        // ----------------- بيت ---------
        Auctions::create([
            'product_id' => '3',
            'auction_current_price' => '35000000',
            'auction_status' => '0',
        ]);

        // ----------------- اوبتيما سيارة ---------
        Auctions::create([
            'product_id' => '4',
            'auction_current_price' => '700000',
            'auction_status' => '0',
        ]);

        // ----------------- ساعة ---------
        Auctions::create([
            'product_id' => '5',
            'auction_current_price' => '15000',
            'auction_status' => '0',
        ]);

        AuctionUsers::create([
            'auction_id' => "4",
            'user_id' => "1",
            'user_price' => "705000",
            'user_total_bidding' => "705000",
        ]);

        Bill::create([
            "user_id" => 1,
            "comment" => "أول عميل لمنصة مزاد",
            "is_bill_payed" => 0,
        ]);

        BillData::create([
            "products_id" => "4",
            "bill_id" => "1",
            "auction_users_id"=> "1",
        ]);

        // ----------------- Auction Users -----------
        // -------------------------------------------
        // AuctionUsers::factory(5)->create([
        //     'auction_id' => 1,
        //     'user_id' => 1
        // ]);

    }
}
