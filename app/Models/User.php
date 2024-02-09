<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'idno', 'firstname', 'lastname', 'personal_phone', 'password', 'category'
    ];
    

}
