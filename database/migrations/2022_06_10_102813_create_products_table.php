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
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            $table->String('product_name');
            $table->text('product_description')->nullable();
            $table->String('sku')->unique();
            $table->String('hsn')->nullable();
            $table->unsignedBigInteger('molecule_id')->references('id')->on('molecules');
            $table->unsignedBigInteger('manufacturer_id')->references('id')->on('manufacturers');
            $table->unsignedBigInteger('created_by')->references('id')->on('users');
            $table->unique(["subcategory_id", "product_name"], 'subcat_pdct_unique');
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
