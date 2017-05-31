<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKToEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table-> foreign('user_id')->references('id')->on('users')
            ->onDelete('restrict')->onUpdate('cascade');
            $table-> foreign('job_id')->references('id')->on('jobs')
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
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign('employees_user_id_foreign');
            $table->dropForeign('employees_job_id_foreign');
        });
    }
}
