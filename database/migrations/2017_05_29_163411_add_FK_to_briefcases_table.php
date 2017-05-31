<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKToBriefcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('briefcases', function (Blueprint $table) {
            $table-> foreign('project_id')->references('id')->on('projects')
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
        Schema::table('briefcases', function (Blueprint $table) {
            $table->dropForeign('briefcases_project_id_foreign');
        });
    }
}
