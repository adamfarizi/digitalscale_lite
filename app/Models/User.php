<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'nama', 
        'username', 
        'password', 
        'role',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function truck()
    {
        return $this->hasMany(Truck::class, 'id_user');
    }
}
