<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrackingToOrderVegetable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('order_vegetable', function (Blueprint $table) {
        //     //
        //     $table->foreignId('tracking')->constrained()->onDelete('cascade')->nullOnDelete();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('order_vegetable', function (Blueprint $table) {
        //     //
        //     $table->dropColumn('tracking');
        // });
    }
}
