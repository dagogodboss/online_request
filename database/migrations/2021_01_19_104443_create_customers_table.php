<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email')->unique();
            $table->string('city');
            $table->string('nationality');
            $table->string('phone_number');
            $table->string('dateofbirth');
            $table->string('religion');
            $table->string('maritalStatus');
            $table->string('nx_first_name');
            $table->string('nx_last_name');
            $table->string('nxother_name')->nulllable();
            $table->string('nxdateofbirth')->nullable();
            $table->string('nxreligion')->nullable();
            $table->string('nxgender')->nullable();
            $table->string('nxpermanent_address')->nullable();
            $table->string('nxmobile')->nullable();
            $table->string('nxcity')->nullable();
            $table->string('nxnationality')->nullable();
            $table->string('nxstate')->nullable();
            $table->string('nxrelationship')->nullable();
            $table->string('bnkfirst_name')->nullable();
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
        Schema::drop('customers');
    }
}
