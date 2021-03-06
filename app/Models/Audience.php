<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relación uno a muchos inversa

    public function courses(){
        return $this->belongsTo('App\Models\Course');
    }
}
