<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompagnieRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compagnie_registers', function (Blueprint $table) {
            $table->id();
            $table->text('nom');
            $table->text('prenom');
            $table->String('email');
            $table->text('compagnie');
            $table->text('addresse');
            $table->text('enregistrement');
            $table->text('nana');
            $table->String('solo');
            $table->text('bien');
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
        Schema::dropIfExists('compagnie_registers');
    }
}
