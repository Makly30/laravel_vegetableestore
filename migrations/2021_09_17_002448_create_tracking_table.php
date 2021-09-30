<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tracking', function (Blueprint $table) {
        //     // $table->id();
        //     // $table->foreignId('orp')->constrained()->onDelete('cascade');
        //     // $table->foreignId('process_status')->constrained()->onDelete('cascade');
        //     // $table->foreignId('deliver_list')->constrained()->onDelete('cascade');
        //     // $table->string('tr_place')->nullable();
        //     // $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('tracking');
    }
}
