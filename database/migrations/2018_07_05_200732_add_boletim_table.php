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
        Schema::create('boletim', function (Blueprint $table) {
            $table->increments('id');           //código identificador
            $table->integer('registration');            //título da nota
            $table->string('name');      //descrição da nota
            $table->integer('note');    //hora
            $table->string('class');    //data
            $table->integer('period');    //hora
            $table->integer('user_id')->unsigned(); //user ID
            $table->timestamps();       //registro created_at e updated_at

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boletim', function (Blueprint $table) {
            //
        });
    }
}
