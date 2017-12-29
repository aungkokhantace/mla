<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFilePathToProgramPaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('program_paper', function (Blueprint $table) {
          $table->string('paper_file')->after('abstract')->nullable();
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
          $table->dropColumn('paper_file');
      });
    }
}
