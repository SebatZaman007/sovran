<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marchent extends Model
{
    use HasFactory;

    protected $fillable=[
        'marchent_image',
        'marchent_header',
        'marchent_title1',
        'marchent_title2'
    ];
}
