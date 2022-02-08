<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainlogo extends Model
{
    use HasFactory;

    protected $fillable=[
        'mainlogo_image',
        'mainlogo_name',
    ];
}
