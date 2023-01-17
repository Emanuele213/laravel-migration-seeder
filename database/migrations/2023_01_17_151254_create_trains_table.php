<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 100);
            $table->string('Stazione_di_partenza', 200)->default('1');
            $table->string('Stazione_di_arrivo', 200);
            $table->date('Orario_di_partenza',20);
            $table->date('Orario_di_arrivo',20);
            $table->bigInteger('Codice_treno')->default('0000');
            $table->bigInteger('Numero_di_carrozze')->default('8');
            $table->string('In_orario', 10)->default('SI');
            $table->string('Cancellato', 100)->default('NO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.$
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
