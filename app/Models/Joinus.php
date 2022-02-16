<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joinus extends Model
{
    use HasFactory;

    protected $fillable=[
        'joinus_image',
        'joinus_title_one',
        'joinus_title_two',
        'joinus_header'
    ];
}
