<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class properties extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(user::class);
    } 
    public function mediaproperty(){
        return $this->hasMany(MediaProperty::class);
    }


}
