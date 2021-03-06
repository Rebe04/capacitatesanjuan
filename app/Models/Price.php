<?php

namespace App\Models;

use Illuminate\Database\Console\DumpCommand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos

    public function course(){
        return $this->hasMany('App\Models\Course');
    } 
}
