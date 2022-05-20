<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChampionHardwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champion_hardware', function (Blueprint $table) {
            $table->id();
            //Uso del constrained para ahorrar la linea de abajo
            $table->foreignId('champion_id')->nullable()->constrained()->nullOnDelete();
            //$table->foreign('champion_id')->references('id')->on('champions')->nullOnDelete();
            $table->foreignId('hardware_id')->nullable()->constrained()->nullOnDelete();
            //$table->foreign('hardware_id')->references('id')->on('hardware')->nullOnDelete();
            $table->date('assignation_date');
            $table->date('remove_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champion_hardware');
    }
}
