<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gp', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('gb');
            $table->decimal('price');
            $table->unsignedInteger('telefono_id');
            $table->foreign('telefono_id')->references('id')->on('telefonos');
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
        Schema::dropIfExists('gp');
    }
}
