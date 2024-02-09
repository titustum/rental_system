<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoreDetail extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'room','gender','school','parent','parent_phone',
        'home_county','home_constituency','home_village'];
}
