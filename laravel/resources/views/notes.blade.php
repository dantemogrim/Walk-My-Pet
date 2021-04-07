{{-- Här kan vi kommentera stuff till varandra :)


1. Erik
/////////////////
Phone, neighborhood insertas som det ska. (Ligger atm i reg, men kan flyttas senare till edit profile ex.)
(User.php, RegisterController.php, User-migration.php)


Just nu ligger pet_owner och pet_walker some text istället för boolean. Blev bökigt att fy in som boolean utan att ex svara '1 eller 2'.
Kan säkert lösas sen, men datan går in. En fördel med detta är dock att kund kan vara både ägare OCH gå med andras djur.


////////////////
2. Sandra

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




3. Dante --}}



