<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combos', function (Blueprint $table) {
            $table->id();
            $table->string('comboName');
            $table->char('comboSection', 1);
            $table->string('comboTitle')->nullable();
            $table->string('comboTag')->nullable();
            $table->text('comboContent')->nullable();
            $table->string('comboImage')->nullable();
            $table->string('comboBtn')->nullable();
            $table->string('comboUrl')->nullable();
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
        Schema::dropIfExists('combos');
    }
}
