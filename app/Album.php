<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Photo;

class Album extends Model
{
    public $table = 'albums';

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

