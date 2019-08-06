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
            $table->string('type');
            $table->string('customer_name');
            $table->string('customer_name_2');
            $table->integer('sale_number');
            $table->string('date_completed');
            $table->integer('total');
            $table->integer('total_hours');
            $table->integer('total_cost');
            $table->integer('profit');
            $table->integer('margin');
            $table->string('employee_name');
            $table->string('store_division');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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
