<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    //
    protected $fillable = ['name', 'photo', 'dept', 'designation', 'batch', 'phone'];
}
