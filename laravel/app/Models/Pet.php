<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    // Built in Laravel functionalities - no touchy.
    protected $fillable = [
        'name',
        'owner_id',
        'species',
        'info',
        'profile_img',
    ];

    // Eloquent assumes each model's corresponding db table has a primary key named 'id'.
    // If not then we need to explain to Laravel what our primary key is named like so:
    protected $primaryKey = 'pet_id';

    public function owners()
    {
        // Eloquent always assumes that our db tables foreign keys will be named 'user_id'.
        // Since we've named it something else, 'owner_id', we need to explain this like so:
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }
}
