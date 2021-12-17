<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdersParts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_parts', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement();
            $table->integer('fk_orderid');
            $table->integer('fk_partid');
            $table->foreign('fk_orderid')->references('order_id')->on('orders');
            $table->foreign('fk_partid')->references('part_id')->on('parts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
