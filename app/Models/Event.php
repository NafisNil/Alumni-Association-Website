<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = ['title','category', 'date', 'time', 'location', 'photo', 'description', 'application_fees','map','description'];
}
