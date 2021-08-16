<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('gender_id')->unsigned()->nullable();
            $table->date('dob');
            $table->decimal('salary')->unsigned();
            $table->date('join_date');
            $table->date('leave_date')->nullable();
            $table->integer('department_id')->unsigned()->nullable();
            $table->integer('jobtitle_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('jobtitle_id')->references('id')->on('job_titles')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
