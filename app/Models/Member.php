<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable=[
        'member_image',
        'member_header',
        'member_title1',
        'member_title2'
    ];
}
