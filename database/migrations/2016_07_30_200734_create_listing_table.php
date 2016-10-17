<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('logo');
            $table->string('location');
            $table->string('division');
            $table->string('district');            
            $table->string('phone_number');
            $table->string('mobile_number');
            $table->string('fax');
            $table->string('email');
            $table->string('website');
            $table->string('establishment_year');
            $table->string('manager');
            $table->string('employee_number');
            $table->string('contact_person');
            $table->text('description');
            $table->string('saturday');
            $table->string('sunday');
            $table->string('monday');
            $table->string('tuesday');
            $table->string('wednesday');
            $table->string('thursday');
            $table->string('friday');
            $table->string('keyword');
            $table->boolean('approved')->default(0);
            $table->boolean('varified')->default(0);
            $table->integer('user_id');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Listings');
    }
}
