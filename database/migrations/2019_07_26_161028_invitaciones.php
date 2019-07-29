<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invitaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('email_invitacion')->nullable();
            $table->string('nombre');
            $table->string('email');
            $table->string('empresa');
            $table->string('telefono');
            $table->string('rut');
            $table->unsignedInteger('invitar');
            $table->bigInteger('codigo');
            $table->integer('status')->default(0)->comment('1 = aceptado , 0 = sin aceptar');
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
        Schema::dropIfExists('invitaciones');
    }
}
