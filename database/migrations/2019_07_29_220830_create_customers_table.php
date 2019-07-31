<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('customer_name');
            $table->string('address');
            $table->string('addressline2');
            $table->string('phone');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('county');
            $table->string('customer_number');
            $table->string('customer_name_2');
            $table->string('address_2');
            $table->string('addressline2_2');
            $table->string('phone_2');
            $table->string('city_2');
            $table->string('state_2');
            $table->string('zip_2');
            $table->string('county_2');
            $table->string('customer_number_2');
            $table->integer('sales_tax_percent');
            $table->string('employee_name');
            $table->string('employee_number');
            $table->string('alternate_phone');
            $table->string('alternate_contact');
            $table->string('customer_type');
            $table->integer('taxable');
            $table->integer('active');
            $table->string('terms');
            $table->integer('balance_owed');
            $table->integer('finance_charge_rate');
            $table->integer('minimum_charge');
            $table->integer('grace_period');
            $table->string('assess_on_overdue');
            $table->string('calculate_charges_from');
            $table->string('price_level');
            $table->string('store_division');
            $table->string('email');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
