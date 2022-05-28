<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->string('name_customer', 100);
            $table->string('surname_customer', 100);
            $table->string('name_seller', 100);
            $table->string('surname_seller', 100);
            $table->text('comments');
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('restrict');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('restrict');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('restrict');
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
