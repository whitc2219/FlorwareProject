<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->integer('sale_number');
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
            $table->integer('amount');
            $table->integer('tax');
            $table->integer('total');
            $table->integer('profit');
            $table->integer('margin');
            $table->integer('total_cost');
            $table->integer('sales_tax_percent');
            $table->string('employee_name');
            $table->string('employee_number');
            $table->integer('estimate_number');
            $table->date('date');
            $table->string('status');
            $table->string('notes');
            $table->string('sale_items');
            $table->string('payment_list');
            $table->integer('payments');
            $table->integer('balance');
            $table->date('date_completed');
            $table->string('terms');
            $table->date('date_due');
            $table->integer('age');
            $table->integer('discount');
            $table->integer('commission');
            $table->integer('remote_tran_no');
            $table->string('balance_adjustment_code');
            $table->string('store_division');
            $table->string('job_number');
            $table->string('time_edited');
            $table->date('date_edited');
            $table->string('user');
            $table->string('locked');
            $table->string('password');
            $table->string('email');
            $table->string('user_name');
            $table->string('tag');
            $table->string('contact_1');
            $table->string('contact_2');
            $table->string('contact_3');
            $table->string('email_2');
            $table->string('email_3');
            $table->string('job_instructions');
            $table->string('directions');
            $table->string('parking_instructions');
            $table->string('key_badge_required');
            $table->string('sec_code');
            $table->string('sec_instructions');
            $table->string('water_access');
            $table->string('site_notes');
            $table->string('type');
            $table->string('created');
            $table->integer('total_hours');
            $table->string('phone_3');
            $table->string('time_of_day');
            $table->string('start_time');
            $table->date('requested_start_date');
            $table->string('pre_post_call');
            $table->string('post_call');
            $table->string('mma_pw_mwb');
            $table->string('fees');
            $table->string('level_of_urgency');
            $table->integer('commission_percent');
            $table->string('taxable');
            $table->string('po_number');
            $table->integer('estimated_profit');
            $table->integer('estimated_margin');
            $table->string('subject');
            $table->date('adjustment');
            $table->integer('budgeted_hours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
