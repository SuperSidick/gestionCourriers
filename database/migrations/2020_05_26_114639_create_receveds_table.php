<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecevedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receveds', function (Blueprint $table) {
            $table->id();
            $table->string('objet');
            $table->string('expeditaire');
            $table->string('destinataire');
            $table->string('livreur');
            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
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
        Schema::dropIfExists('receveds');
    }
}
