<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('RUT', 10)->unique();
            $table->string('name', 50);
            $table->string('lastname', 50);
            $table->string('email', 50)->unique();
            $table->string('direccion', 50);
            $table->enum('especialidad', ['Neurologia', 'Ortopedia', 'Pediatria'])->nullable()->default('Neurologia');
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
        Schema::dropIfExists('doctors');
    }
}
