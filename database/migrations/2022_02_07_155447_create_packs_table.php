<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('address', 100);
            $table->string('country', 100);
            $table->string('city', 100);
            $table->text('description');
            $table->unsignedTinyInteger('nights');
            $table->unsignedTinyInteger('person');
            $table->unsignedTinyInteger('validity_time');
            $table->float('price', 10, 2);
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
        Schema::dropIfExists('packs');
    }
}
