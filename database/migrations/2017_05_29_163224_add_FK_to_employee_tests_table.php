<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKToEmployeeTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_tests', function (Blueprint $table) {
            $table-> foreign('employee_id')->references('id')->on('employees')
            ->onDelete('restrict')->onUpdate('cascade');
            $table-> foreign('test_details_id')->references('id')->on('test_details')
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
        Schema::table('employee_tests', function (Blueprint $table) {
            $table->dropForeign('employee_tests_employee_id_foreign');
            $table->dropForeign('employee_tests_test_details_id_foreign');
        });
    }
}
