<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{

    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->integer('discount')->unsigned()->nullable();
            $table->integer('total')->unsigned();
            $table->integer('store_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('store_id')->references('id')->on('stores')->onUpdate('cascade')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
