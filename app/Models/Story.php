<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Story extends Model
{
    //
    protected $fillable = ['title','desc','user_id'];
    public function user_info(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
