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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();            
            $table->String('reference_id')->nullable();
            $table->dateTime('entry_date');
            $table->text('notes')->nullable();
            $table->decimal('mrp_total', 8, 2)->default('0.00');            
            $table->decimal('selling_price_total', 8, 2)->default('0.00');            
            $table->unsignedBigInteger('created_by')->references('id')->on('users');
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
        Schema::dropIfExists('stocks');
    }
};
