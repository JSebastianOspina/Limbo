<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHardwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardwares', function (Blueprint $table) {
            $table->id();
            //Columnas propias
            $table->string('model');
            $table->string('serial');
            $table->enum('type',['laptop','desktop','printer','ups']);
            $table->string('reference');
            $table->string('fixed_asset');
            $table->date('purchase_date');
            $table->enum('purchase_mode',['leasing','own']);
            $table->string('brand');
            $table->bigInteger('cost');
            $table->string('processor')->nullable()->default('no aplica');
            $table->string('video_card')->nullable()->default('no aplica');
            $table->enum('printer_type',['laser','thermal','ink','dot_matrix','no aplica'])->nullable()->default('no aplica');
            $table->string('ups_capacity')->nullable()->default('no aplica');

            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('hardwares');
    }
}
