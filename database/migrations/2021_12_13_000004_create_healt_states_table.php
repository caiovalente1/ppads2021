<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealtStatesTable extends Migration
{
    public function up()
    {
        Schema::create('healt_states', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('good')->default(0)->nullable();
            $table->boolean('bad')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
