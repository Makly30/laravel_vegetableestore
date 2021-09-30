<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('deliver_list', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('seller')->constrained()->onDelete('cascade');
        //     $table->foreignID('deliver')->constrained()->onDelete('cascade');
        //     $table->foreignId('orp')->constrained()->onDelete('cascade');
        //     $table->foreignId('deliver_service')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('deliver_list');
    }
}
