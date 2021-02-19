<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\genres;
use App\episodes;

class movies extends Model
{
    protected $table = 'movies';
    public function genres(){
        return $this->belongsTo('genres', 'id', 'genre_id');
    }
    public function episodes(){
        return $this->HasMany('episodes', 'movie_id', 'id');
    }
}
