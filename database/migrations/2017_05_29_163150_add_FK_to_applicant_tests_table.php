<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKToApplicantTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applicant_tests', function (Blueprint $table) {
            $table-> foreign('applicant_id')->references('id')->on('applicants')
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
        Schema::table('applicant_tests', function (Blueprint $table) {
            $table->dropForeign('applicant_tests_applicant_id_foreign');
            $table->dropForeign('applicant_tests_test_details_id_foreign');
        });
    }
}
