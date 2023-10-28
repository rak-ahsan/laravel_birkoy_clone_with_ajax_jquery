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
        Schema::create('postads', function (Blueprint $table) {
            $table->id('ads_id');
            $table->number('ads_loc');
            $table->number('ads_cata');
            $table->string('condtions');
            $table->string('authenticity');
            $table->string('brand');
            $table->string('model');
            $table->string('desc');
            $table->number('price');
            $table->string('nego');
            $table->string('photos');
            $table->string('pos_number');
            $table->number('user_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postads');
    }
};
