<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            // Foreign key to our Users tables 'id' column.
            $table->unsignedInteger('user_id');
            $table->boolean('completed')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}

/* UTKAST för 'bokningssystem'
Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('message');

            // pet-walker som skickar förfrågan om att få bli walker
            $table->unsignedBigInteger('walker_id');
            $table->foreign('walker_id')->references('id')->on('users');

            // pet-owner som kan tacka ja eller nej
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('owner_id')->on('pets');

            // Pet ID
            $table->unsignedBigInteger('pet_id');
            $table->foreign('pet_id')->references('pet_id')->on('pets');

            $table->boolean('confirmed')->default(false);
            $table->timestamps();
        });
    }

*/
