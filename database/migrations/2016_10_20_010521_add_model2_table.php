<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModel2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomnbre');
            $table->integer('mod_id')->unsigned();
            $table->foreign('mod_id')->references('id')->on('model1');
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
        Schema::dropIfExists('model2');
    }
}
