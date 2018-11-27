<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBoletimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Boletim', function (Blueprint $table) {

            $table->integer('registration');           //código identificador
            $table->Sting('user');           //código identificador
            $table->string('class');            //título da atividade
            $table->integer('note');      //descrição da atividade
            $table->integer('period');    //agendado para
            $table->timestamps();               //registro created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Boletim', function (Blueprint $table) {
            //
        });
    }
}
