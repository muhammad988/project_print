<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountsTable extends Migration
{
    public function up()
    {
        Schema::create('counts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('count');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('counts');
    }
}
