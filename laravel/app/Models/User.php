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

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'info',
        'profile_img',
        'neighborhood',
        'pet_owner',
        'pet_walker'
    ];

    protected $hidden = [
        'password',
    ];


    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
