<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('type')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('images')->nullable();
            $table->text('website')->nullable();
            $table->string('phone')->nullable();
            $table->text('desc')->nullable();
            $table->date('wedding')->nullable();
            $table->text('facebookURl')->nullable();
            $table->text('twitterUrl')->nullable();
            $table->text('linkedinUrl')->nullable();
            $table->text('pinterestUrl')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
