<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footerleft extends Model
{
    use HasFactory;

    protected $fillable=[
        'footerleft_image',
        'footerleft_title'
    ];
}
