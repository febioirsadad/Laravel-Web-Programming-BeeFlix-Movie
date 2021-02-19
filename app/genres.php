<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\movies;

class genres extends Model
{
    protected $table = 'genres';
    public function movies(){
        return $this->hasMany('movies', 'genre_id', 'id');
    }
}