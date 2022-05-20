<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software_licenses', function (Blueprint $table) {
            $table->id();
            //Columnas de la tabla de software
            $table->date('purchase_date');
            $table->date('renovation_date');
            $table->bigInteger('cost');
            $table->boolean('is_for_mac');
            $table->boolean('is_for_windows');
            $table->boolean('is_for_web');
            $table->enum('type',['renovated','perpetual']);
            $table->string('version');
            $table->foreignId('software_id')->nullable();
            $table->foreign('software_id')->references('id')->on('software')->nullOnDelete();
            $table->string('activation_key');
            $table->integer('total_licences');
            $table->foreignId('champion_id')->nullable();
            $table->foreign('champion_id')->references('id')->on('champions')->nullOnDelete();
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
        Schema::dropIfExists('software_licenses');
    }
}
