{{-- Här kan vi kommentera stuff till varandra :)


1. Erik
/////////////////
Phone, neighborhood insertas som det ska. (Ligger atm i reg, men kan flyttas senare till edit profile ex.)
(User.php, RegisterController.php, User-migration.php)


Just nu ligger pet_owner och pet_walker some text istället för boolean. Blev bökigt att fy in som boolean utan att ex svara '1 eller 2'.
Kan säkert lösas sen, men datan går in. En fördel med detta är dock att kund kan vara både ägare OCH gå med andras djur.


////////////////
2. Sandra

    Task som Bokning:
    - View:
        Ni kan besöka /test-task för att se hur ett bokningsformulär kan se ut, ingen knapp/länk dit än och bara en enkel Route::view.
        Den är skriven ur en Walkers pov, ska Owners kunna skicka förfrågningar också?
        Vi kan ju bestämma om det ska vara en egen sida som nu, eller om det ska vara en del av en single-pet.blade.php et dyl.
        Det behövs också controllers/model functions för att kunna displaya data från db.

    - Models: lade till hasMany relation i Pet model (Pet has Many Tasks)
    - Controllers: ngen ny controller än, kanske räcker med olika functions i Models (pet och tasks)? Där kan man ju skriva specifika queries.
    - Migration: utkast till utökad table i kommentar. Många foreign keys, kanske finns tydligare samband?


3. Dante --}}



