<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Notice extends Model
{
    //
    use HasFactory;
    protected $fillable = ['title', 'description', 'photo', 'file', 'slug'];
}
