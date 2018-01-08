<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddItineraryRouteAndFoodToConferenceRegistrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('conference_registrations', function (Blueprint $table) {
            $table->string('itinerary_route')->after('payment_type')->nullable();
            $table->string('food')->after('itinerary_route')->nullable();
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
            $table->dropColumn('itinerary_route');
            $table->dropColumn('food');
        });
    }
}
