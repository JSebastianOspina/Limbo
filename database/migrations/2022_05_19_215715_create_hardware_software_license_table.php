<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardwareSoftwareLicenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardware_software_license', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hardware_id')->constrained();
            $table->foreignId('software_license_id')->constrained();
            $table->foreignId('software_id')->constrained();
            $table->date('installation_date') ;
            $table->date('remove_date')->nullable();
            $table->date('renovation_date');
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
        Schema::dropIfExists('hardware_software_license');
    }
}
