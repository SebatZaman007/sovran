<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comingsoon extends Model
{
    use HasFactory;

    protected $fillable=[
        'comingsoon_title_one',
        'comingsoon_title_two',
        'comingsoon_title_three',
        'comingsoon_image',
    ];
}
