<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videoposter extends Model
{
    use HasFactory;

    protected $fillable=[
        'videoposter_image',
        'videoposter_description',
        'videoposter_videolink'
    ];
}
