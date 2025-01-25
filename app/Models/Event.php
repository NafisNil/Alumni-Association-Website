<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Event extends Model
{
    //
    use HasFactory;
    protected $fillable = ['title','category', 'date', 'time', 'location', 'photo', 'description', 'application_fees','map','description','slug'];
}
