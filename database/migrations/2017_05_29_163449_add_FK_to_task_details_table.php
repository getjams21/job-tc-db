<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKToTaskDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_details', function (Blueprint $table) {
            $table-> foreign('task_id')->references('id')->on('tasks')
            ->onDelete('restrict')->onUpdate('cascade');
            $table-> foreign('project_id')->references('id')->on('projects')
            ->onDelete('restrict')->onUpdate('cascade');
            $table-> foreign('employee_id')->references('id')->on('employees')
            ->onDelete('restrict')->onUpdate('cascade');
            $table-> foreign('team_id')->references('id')->on('teams')
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
        Schema::table('task_details', function (Blueprint $table) {
            $table->dropForeign('task_details_task_id_foreign');
            $table->dropForeign('task_details_project_id_foreign');
            $table->dropForeign('task_details_employee_id_foreign');
            $table->dropForeign('task_details_team_id_foreign');
        });
    }
}
