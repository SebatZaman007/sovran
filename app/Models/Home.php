<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable=[
        'home_name1',
        'home_name2',
        'home_name3',
        'home_name4',
        'home_description',
        'home_image'
    ];
}
