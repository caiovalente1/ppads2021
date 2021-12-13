<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnamnesesTable extends Migration
{
    public function up()
    {
        Schema::create('anamneses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('air')->default(0)->nullable();
            $table->boolean('tiredness')->default(0)->nullable();
            $table->boolean('fever')->default(0)->nullable();
            $table->boolean('pain')->default(0)->nullable();
            $table->boolean('head')->default(0)->nullable();
            $table->boolean('chest')->default(0)->nullable();
            $table->boolean('muscle')->default(0)->nullable();
            $table->boolean('smell')->default(0)->nullable();
            $table->boolean('taste')->default(0)->nullable();
            $table->boolean('diarrhea')->default(0)->nullable();
            $table->boolean('sneeze')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
