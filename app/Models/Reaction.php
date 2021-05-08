<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const LIKE = 1;
    const DISLIKE = 0;

    public function reactionable(){
        return $this->morphTo();
    }

    //Relación uno a muchos inversa

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
