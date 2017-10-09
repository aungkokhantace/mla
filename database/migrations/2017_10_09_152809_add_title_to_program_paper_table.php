<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleToProgramPaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('program_paper', function (Blueprint $table) {
            $table->string('title')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('program_paper', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }
}
