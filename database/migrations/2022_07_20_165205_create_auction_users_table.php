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
        Schema::create('auction_users', function (Blueprint $table) {
            $table->id('auction_user_id');
            $table->foreignId('auction_id')
                ->constrained("auctions")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('user_id')
                ->constrained("users")
                ->cascadeOnUpdate()
                ->cascadeOnDelete();;
            $table->unsignedBigInteger('user_price');
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
        Schema::dropIfExists('auction_users');
    }
};
