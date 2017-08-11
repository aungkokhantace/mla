<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('program_registration', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',50);
            $table->string('first_name,50');
            $table->string('last_name,50');
            $table->string('organisation,255');
            $table->string('email,50');
            $table->integer('country_id');
            $table->string('phone,50');
            $table->integer('registration_category_id');            
            $table->integer('payment_type_id');
            $table->integer('status')->default(1);

            //common to all tables...
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
        Schema::drop('program_registration');
    }
}
