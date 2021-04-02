<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedInteger('phone')->nullable();
            $table->string('info')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('pet_owner')->nullable();
            $table->string('pet_walker')->nullable();
            $table->timestamps();
        });
    }
}

// Notera pet -> string just nu istället från Boolean. Bytte datatyp manuellt i databasen under 'structure'.
