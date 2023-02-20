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
            $table->integer('user_id')->nullable();
            $table->integer('product_category_id')->nullable();
            $table->string('naming')->nullable();
            $table->string('factory_designation')->nullable();
            $table->string('vendor_code')->nullable();
            $table->json('dimensions')->nullable();
            $table->float('weight_kg')->nullable();
            $table->integer('price_type_id')->nullable();
            $table->json('files')->nullable();
            $table->json('tags')->nullable();
            $table->integer('producer_id')->nullable();
            $table->json('characteristics')->nullable();
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
