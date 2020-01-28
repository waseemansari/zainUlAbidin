<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_models', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('heading');
            $table->text('address');
            $table->string('country');
            $table->string('city');
            $table->integer('category');
            $table->text('description');
            $table->string('seat');
            $table->integer('price_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('user_id');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('list_models');
    }
}
