<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('productcategory_id')->constrained();
            $table->string('product_title');
            $table->text('product_short_description');
            $table->text('product_description');
            $table->unsignedBigInteger('product_start_price');
            $table->unsignedBigInteger('product_sell_now_price');
            $table->date('bid_start_date');
            $table->date('bid_end_date');
            $table->string('product_main_image_location');
            $table->boolean('is_product_sold');
            $table->timestamps();
        });
    }
    
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
