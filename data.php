<?php

$categories = [
    'category_name',
    'category_description',
    'category_image_location',
];

$products = [
    [
        'category_id' => '1',
		'user_id' => '',
        'product_name' => '',
        'product_short_description' => '',
        'product_description' => '',
        'product_start_price' => '',
        'product_sell_now_price' => '',
		'product_quantity' => '',
        'auction_start_date' => '',
        'auction_end_date' => '',
        'product_main_image_location' => '',
        'is_product_sold' => '',
    ]
];

$password = bcrypt(123);

return [
    [
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
    ],
    [
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
    ],
    [
        'role_id' => 3,
		'name' => 'محمد خالد محمد',					
        'last_name' => 'الحسني',
        'email' => 'mohmmedx46@gmail.com',
        'phone_number' => '774814450',
        'password' => $password,
        'user_status' => '1',
		'subscription_type' => '1',
		'insurance_amount' => '0',
		'is_bidding' => '0',
		'is_confirm_terms' => '1',
		'user_image_location' => 'storage/users/mohmmed.jpg',
    ]
]

?>