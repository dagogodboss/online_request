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
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('other_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('city')->nullable();
            $table->string('religion')->nullable();
            $table->string('home_address')->nullable();
            $table->string('invest_plan')->nullable();
            $table->string('amount_investing')->nullable();
            $table->string('marketer_name')->nullable();
            $table->string('duration')->nullable();
            $table->string('id_card_type')->nullable();
            $table->string('id_expiry_date')->nullable();
            $table->string('interest_payout')->nullable();
            $table->string('bank_first_name')->nullable();
            $table->string('bank_last_name')->nullable();
            $table->string('bank_other_name')->nullable();
            $table->string('bank')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_account_type')->nullable();
            $table->string('signature')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('id_card_image')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('company_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('country_name')->nullable();
            $table->string('state')->nullable();
            $table->string('branch')->nullable();  
            $table->string('permanent_address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('relationship')->nullable();
            $table->string('nx_first_name')->nullable();
            $table->string('nx_last_name')->nullable();
            $table->string('nx_other_name')->nulllable();
            $table->string('nx_email')->unique();
            $table->string('nx_gender')->nullable();            
            $table->string('nx_nationality')->nullable();
            $table->string('nx_date_of_birth')->nullable();
            $table->string('nx_mobile')->nullable();
            $table->string('nx_permanent_address')->nullable();
            $table->string('nx_country_name')->nullable();
            $table->string('nx_state')->nullable();
            $table->string('nx_city')->nullable();
            $table->string('nx_religion')->nullable();
            $table->string('nx_relationship')->nullable();
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
