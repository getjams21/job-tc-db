<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('test_id')->unsigned();
            $table->string('status')->nullable();
            $table->smallInteger('score')->nullable();
            $table->decimal('average', 3, 2)->nullable();
            $table->time('time_finished')->nullable();
            $table->time('time_remaining')->nullable();
            $table->integer('last_question_taken')->unsigned()->nullable(); // Question ID
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
        Schema::drop('test_details');
    }
}
