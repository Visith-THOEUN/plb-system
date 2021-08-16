<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_products', function (Blueprint $table) {
            $table->id();
            $table->integer('sale_id')->unsigned()->nullable();
            $table->integer('product_id')->unsigned()->nullable();
            $table->integer('qty')->unsigned();
            $table->integer('rate')->unsigned();
            $table->integer('amount')->unsigned();
            $table->timestamps();
            $table->foreign('sale_id')->references('id')->on('sales')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('set null');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_users');
    }
}
