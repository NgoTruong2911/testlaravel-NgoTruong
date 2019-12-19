<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['content','user_id'];
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}
