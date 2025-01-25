<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Story extends Model
{
    //
    use HasFactory;
    protected $fillable = ['title','desc','user_id','slug'];
    public function user_info(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
