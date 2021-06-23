<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaggisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     // per creare tabella php artisan make:migration create_viaggis_table

    public function up()
    {
        Schema::create('viaggis', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('viaggis');
    }
}
