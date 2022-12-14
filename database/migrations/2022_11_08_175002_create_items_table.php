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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('item_Code')->unique();
            $table->string('item_name')->nullable();
            $table->string('item_description')->nullable();
            $table->integer('Buying_price')->nullable();
            $table->integer('Selling_price')->nullable();
            $table->string('warranty')->nullable();
            $table->string('quantity')->nullable();
            $table->integer('catagory_id')->nullable();
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
        Schema::dropIfExists('items');
    }
};
