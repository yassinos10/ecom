<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use Notifiable;

    protected $tabel = 'admins';
     
    protected $fillable = [
        'name', 'email', 'photo' , 'password', 'created_at', 'updated_at',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
