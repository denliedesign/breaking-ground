<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('tableName');
            $table->char('tableSection', 1);
            $table->string('title')->nullable();
            $table->string('head1')->nullable();
            $table->string('head2')->nullable();
            $table->string('head3')->nullable();
            $table->string('head4')->nullable();
            $table->text('col1');
            $table->text('col2');
            $table->text('col3')->nullable();
            $table->text('col4')->nullable();
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
        Schema::dropIfExists('tables');
    }
}
