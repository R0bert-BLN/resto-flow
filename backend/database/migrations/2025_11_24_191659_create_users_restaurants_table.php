<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users_restaurants', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->foreignUuid('user_id')->constrained('users');
            $table->foreignUuid('restaurant_id')->constrained('restaurants');
            $table->timestamps();

            $table->unique(['user_id', 'restaurant_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_restaurants');
    }
};
