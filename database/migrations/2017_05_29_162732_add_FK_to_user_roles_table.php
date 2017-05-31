<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKToUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_roles', function (Blueprint $table) {
            $table-> foreign('employee_id')->references('id')->on('employees')
            ->onDelete('restrict')->onUpdate('cascade');
            $table-> foreign('role_id')->references('id')->on('roles')
            ->onDelete('restrict')->onUpdate('cascade');
            $table-> foreign('permission_id')->references('id')->on('permissions')
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
        Schema::table('user_roles', function (Blueprint $table) {
            $table->dropForeign('user_roles_employee_id_foreign');
            $table->dropForeign('user_roles_role_id_foreign');
            $table->dropForeign('user_roles_permission_id_foreign');
        });
    }
}
