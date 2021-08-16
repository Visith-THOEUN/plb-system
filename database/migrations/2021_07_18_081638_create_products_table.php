<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('sku')->unique();
            $table->string('name');
            $table->decimal('price')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('store_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('store_id')->references('id')->on('stores')->onUpdate('cascade')->onDelete('set null');
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
}
