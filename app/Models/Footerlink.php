<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footerlink extends Model
{
    use HasFactory;

    protected $fillable=[
        'footerlink_icon',
        'footerlink_link'
    ];
}
