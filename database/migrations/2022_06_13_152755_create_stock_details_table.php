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
        Schema::create('stock_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stock_id');
            $table->unsignedBigInteger('product_id');
            $table->String('batch_no')->unique();
            $table->date('expiry_date');
            $table->integer('qty');
            $table->decimal('mrp', 7, 2)->default('0.00');
            $table->decimal('selling_price', 7, 2)->default('0.00');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict');
            $table->foreign('stock_id')->references('id')->on('stocks')->onDelete('cascade');
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
        Schema::dropIfExists('stock_details');
    }
};
