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
            $table->integer('user_id');
            $table->integer('product_category_id');
            $table->string('naming');
            $table->string('category');
            $table->string('factory_designation');
            $table->string('vendor_code');
            $table->json('dimensions');
            $table->float('weight_kg');
            $table->integer('price_type_id');
            $table->json('files');
            $table->json('tags');
            $table->integer('producer_d');
            $table->json('characteristics');
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
