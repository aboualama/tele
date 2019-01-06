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
             
            $table->enum('q1', ['Yes', 'No'])->default('Yes'); 
            $table->enum('q2', ['Yes', 'No'])->default('Yes'); 
            $table->enum('q3', ['Yes', 'No'])->default('Yes'); 
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
