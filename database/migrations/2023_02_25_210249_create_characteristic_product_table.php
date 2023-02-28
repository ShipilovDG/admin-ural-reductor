<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristic_product', function (Blueprint $table) {
            $table->unsignedBigInteger('characteristic_id')->unsigend();
            $table->unsignedBigInteger('product_id')->unsigend();
            $table->foreign('characteristic_id')->references('id')->on('characteristics');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characteristic_product');
    }
};
