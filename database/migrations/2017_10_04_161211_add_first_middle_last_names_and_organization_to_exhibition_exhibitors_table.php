<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFirstMiddleLastNamesAndOrganizationToExhibitionExhibitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exhibition_exhibitors', function (Blueprint $table) {
            $table->renameColumn('name', 'first_name');
            $table->string('middle_name')->nullable()->after('name');
            $table->string('last_name')->nullable()->after('middle_name');
            $table->string('organization')->nullable()->after('last_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exhibition_exhibitors', function (Blueprint $table) {
            $table->dropColumn('middle_name');
            $table->dropColumn('last_name');
            $table->dropColumn('organization');
        });
    }
}
