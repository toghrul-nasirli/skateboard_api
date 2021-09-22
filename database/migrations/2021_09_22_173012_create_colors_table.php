<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorsTable extends Migration
{
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('hex_code');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('colors');
    }
}
