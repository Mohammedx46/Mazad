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
        Schema::create('auctions_user_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained("users")
                ->cascadeOnUpdate();
            $table->foreignId('auction_id')
                ->constrained("auctions")
                ->cascadeOnUpdate();
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
        Schema::dropIfExists('auctions_user_registrations');
    }
};
