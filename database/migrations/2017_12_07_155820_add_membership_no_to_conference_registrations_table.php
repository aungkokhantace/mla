<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMembershipNoToConferenceRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('conference_registrations', function (Blueprint $table) {
            $table->string('membership_no')->after('registration_category')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('conference_registrations', function (Blueprint $table) {
            $table->dropColumn('membership_no');
        });
    }
}
