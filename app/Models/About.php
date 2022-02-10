<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable=[
        'about_image',
        'about_header',
        'about_name1',
        'about_name2',
        'about_whatdowedo',
        'about_whatdowedo_pera',
    ];
}
