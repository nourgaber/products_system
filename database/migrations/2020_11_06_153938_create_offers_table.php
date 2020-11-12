<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('main_product_id')->nullable()->constrained('products')->onDelete('cascade');
            $table->foreignId('discount_product_id')->constrained('products')->onDelete('cascade');
            $table->integer('main_product_quantity')->nullable();
            $table->integer('discount_product_quantity')->nullable();
            $table->float('discount');
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
        Schema::dropIfExists('offers');
    }
}
