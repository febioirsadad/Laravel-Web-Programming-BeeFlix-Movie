<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\movies;

class episodes extends Model
{
    protected $table = 'episodes';
    public function movies(){
        return $this->belongsTo('movies', 'id', 'genre_id');
    }
}
