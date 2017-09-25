<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorPackageTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_package_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('currency');
            $table->double('amount');

             //Common to all table ----------------------------------------------
             $table->integer('created_by')->default(1);
             $table->integer('updated_by')->default(1);
             $table->integer('deleted_by')->nullable();
             $table->timestamps();
             $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sponsor_package_type');
    }
}
