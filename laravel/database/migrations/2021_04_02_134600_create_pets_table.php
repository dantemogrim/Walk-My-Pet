<?php /*

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id('pet_id');

            // OWNER ID SOM FOREIGN KEY
            // Kan skrivas såhär (2 rader):
                //$table->unsignedBigInteger('owner_id');
                //$table->foreign('owner_id')->references('id')->on('users');

            // Eller såhär (1 rad):
                // $table->foreignId('owner_id')->constrained('users');

            $table->string('name');
            $table->string('info')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('neighborhood');
            //$table->foreign('neighborhood')->references('neighborhood')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /*public function down()
    {
        Schema::dropIfExists('pets');
    }
} */
