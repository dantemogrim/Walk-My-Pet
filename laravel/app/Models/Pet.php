<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\Pet as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        //'owner_id' --> inte fillable kanske?
        'species',
        'info',
        'profile_img',
    ];

    /* Docs: Eloquent will assume that each model's corresponding database table has a primary key
    column named id. If necessary, you may define a protected $primaryKey property
    on your model to specify a different column that serves as your model's primary key:*/
    protected $primaryKey = 'pet_id';

    // Ska det finnas en motsvarande relation på User model? Vet inte om det innebär
    // att en User _måste_ ha en Pet eller om den _kan_ ha en Pet och isf max 1.
    public function owners()
    {
        return $this->hasOne(User::class);
    }
}





// <?php

// declare(strict_types=1);

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\Pet as Authenticatable;
// use Illuminate\Notifications\Notifiable;

// class Pet extends Authenticatable
// {
//     use HasFactory;
//     use Notifiable;

//     protected $fillable = [
//         'name',
//         'species',
//         'info',
//         'profile_img',

//     ];
