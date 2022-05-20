<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fixed_asset')->nullable()->default('no aplica');
            $table->enum('device', ['ram', 'hard_disk', 'battery']);
            $table->date('purchase_date');
            $table->bigInteger('cost');
            $table->enum('type', ['HDD', 'SSD', 'DDR3', 'DDR4', 'DDR2', 'DDR5', 'no aplica'])->nullable()->default('no aplica');
            $table->integer('capacity')->nullable()->default(0);
            $table->string('battery_power')->nullable()->default('no aplica');
            $table->string('battery_voltage')->nullable()->default('no aplica');
            $table->string('battery_current')->nullable()->default('no aplica');
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
        Schema::dropIfExists('components');
    }
}
