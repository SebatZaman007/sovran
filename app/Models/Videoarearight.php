<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videoarearight extends Model
{
    use HasFactory;

    protected $fillable=[
        'videoarea_name',
        'videoarea_description',
        'videoarea_pera',
    ];
}
