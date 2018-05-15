<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Boek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boek', function (Blueprint $table) {
            $table->string('afbeelding');
            $table->string('auteur');
            $table->string('titel');
            $table->string('omschrijving');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
