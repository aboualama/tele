<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefonos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('modello_id')->unsigned()->nullable();
            $table->foreign('modello_id')->references('id')->on('modellos')
                  ->onUpdate('cascade')->onDelete('cascade');
             
            $table->string('gb')->nullable();

            $table->decimal('q1')->nullable();
            $table->decimal('q1_1')->nullable();
            $table->decimal('q1_2')->nullable();
            $table->decimal('q1_3')->nullable();
            $table->decimal('q1_4')->nullable();
            $table->decimal('q1_5')->nullable();
            $table->decimal('q2')->nullable();
            $table->decimal('q2_1')->nullable();
            $table->decimal('q2_2')->nullable();
            $table->decimal('q2_3')->nullable();
            $table->decimal('q3')->nullable();
            $table->decimal('prezzo');
            
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
        Schema::dropIfExists('telefonos');
    }
}
