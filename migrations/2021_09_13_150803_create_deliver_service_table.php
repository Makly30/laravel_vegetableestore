<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('deliver_service', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('start')->constrained()->onDelete('cascade');
        //     $table->foreignId('stop')->constrained()->onDelete('cascade');
        //     $table->foreignId('deliver')->constrained()->onDelete('cascade');
        //     $table->dateTime('timefrom');
        //     $table->dateTime('timeto');
        //     $table->foreignId('active')->constrained()->onDelete('cascade');
        //     $table->float('price');
        //     $table->integer('duration');
        //     $table->string('image')->nullable();
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
        // Schema::dropIfExists('deliver_service');
    }
}
