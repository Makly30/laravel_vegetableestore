<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderVegetableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('order_vegetable', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('product_id')->constrained()->onDelete('cascade');
        //     $table->foreignId('customer_id')->constrained()->onDelete('cascade');
        //     $table->float('orp_amount');
        //     $table->foreignId('deliver_choice_id')->constrained()->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('order_vegetable');
    }
}
