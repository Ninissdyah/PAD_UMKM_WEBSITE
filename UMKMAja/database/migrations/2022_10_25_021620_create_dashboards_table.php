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
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->integer('vendorId');
            $table->string('imagePath');
            $table->string('storeName', 100);
            $table->enum('category', ['','Food And Drink', 'Clothes', 'Art', 'Furniture', 'Electronic', 'Beauty And Health']);
            $table->mediumText('desc');
            $table->string('address');
            $table->string('noWa');
            $table->string('ig')->nullable();
            $table->string('shopee')->nullable();
            $table->string('others')->nullable();
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
        Schema::dropIfExists('dashboards');
    }
};
