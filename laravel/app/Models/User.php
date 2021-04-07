<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'info',
        'profile_img',
        'neighborhood',
        'pet_owner',
        'pet_walker',
    ];

    protected $hidden = [
        'password',
    ];

    // Retrieve users tasks.
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    // Retrieve users pets.
    public function pets(): hasMany
    {
        return $this->hasMany(Pet::class);
    }

    /* Nu finns en hasOne relation i Pet model, ska det finnas en motsvarande relation på User model?
    Vet inte om det innebär att en User _måste_ ha en Pet eller om den _kan_ ha en Pet och isf max 1.
    Typ:
     public function pets()
    {
        return $this->hasOne(Pet::class);
    }
     */
}
