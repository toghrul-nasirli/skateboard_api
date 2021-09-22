<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkateboardsTable extends Migration
{
    public function up()
    {
        Schema::create('skateboards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained();
            $table->string('name');
            $table->unsignedInteger('price');
            $table->unsignedInteger('custom_print_price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skateboards');
    }
}
