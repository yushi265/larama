<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primary_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('secondary_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('primary_category_id');
            $table->string('name');
            $table->timestamps();
            // リレーション
            $table
                ->foreign('primary_category_id')
                ->references('id')
                ->on('primary_categories');
        });

        Schema::create('item_conditions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('buyer_id')->nullable();
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('secondary_category_id');
            $table->unsignedBigInteger('item_condition_id');
            $table->unsignedInteger('price');
            $table->string('item_image');
            $table->timestamps();
            // リレーション
            $table
                ->foreign('seller_id')
                ->references('id')
                ->on('users');
            $table
                ->foreign('buyer_id')
                ->references('id')
                ->on('users');
            $table
                ->foreign('secondary_category_id')
                ->references('id')
                ->on('secondary_categories');
            $table
                ->foreign('item_condition_id')
                ->references('id')
                ->on('item_conditions');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
        Schema::dropIfExists('item_conditions');
        Schema::dropIfExists('secondary_categories');
        Schema::dropIfExists('primary_categories');
    }
}
