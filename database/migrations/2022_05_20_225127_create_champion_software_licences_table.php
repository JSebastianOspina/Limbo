<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChampionSoftwareLicencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champion_software_licences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('champion_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('software_license_id')->nullable()->constrained()->nullOnDelete();
            $table->date('installation_date');
            $table->date('remove_date');
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
        Schema::dropIfExists('champion_software_licences');
    }
}
