<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insplan extends Model
{
    protected $fillable = [
        'brand', 'insplanname', 'description', 'detail',
    ];
}
