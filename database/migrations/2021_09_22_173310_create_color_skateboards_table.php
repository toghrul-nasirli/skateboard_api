<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorSkateboardPivotTable extends Migration
{
    public function up()
    {
        Schema::create('color_skateboards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('skateboard_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('color_skateboards');
    }
}
