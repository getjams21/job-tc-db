<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKToTestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('test_details', function (Blueprint $table) {
            $table-> foreign('test_id')->references('id')->on('tests')
            ->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('test_details', function (Blueprint $table) {
            $table->dropForeign('test_details_test_id_foreign');
        });
    }
}
