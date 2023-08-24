<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;
    protected $fillable = ['category','mobile','tablet','pc','smart_tv','android','ios','windows','mac','linux','age_protection'];
}
