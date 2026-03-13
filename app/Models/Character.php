<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    // Allow mass assignment for these fields
    protected $fillable = [
        'name',
        'power',
        'universe',
    ];
}