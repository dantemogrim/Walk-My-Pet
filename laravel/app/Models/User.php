<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    // Built in Laravel functionalities - no touchy.
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

    // Built in Laravel functionalities - no touchy.
    protected $hidden = [
        'password',
    ];

    // Retrieve users tasks.
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    // Retrieve/connect all users pets.
    public function pets()
    {
        // Eloquent always assumes that our db tables foreign keys will be named 'user_id'.
        // Since we've named it something else, 'owner_id', we need to explain the relationship like so:
        return $this->hasMany(Pet::class, 'owner_id', 'id');
    }
}
