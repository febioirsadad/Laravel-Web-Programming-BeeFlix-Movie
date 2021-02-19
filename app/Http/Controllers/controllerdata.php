<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movies;
use App\episodes;
use App\genres;

class controllerdata extends Controller
{
    public function showdrama(){
        $drama1 = movies::select('*')->where('genre_id','=','1')->get();
        $drama2 = movies::select('*')->where('genre_id','=','2')->get();
        $drama3 = movies::select('*')->where('genre_id','=','3')->get();
        return view('home', ['alldramas'=>$drama1,'alldramas2'=>$drama2,'alldramas3'=>$drama3]);
    }

    public function showdetail($id){
        $detail1 =  movies::select('*')->join('genres','movies.genre_id','genres.id')->where('movies.id','=',$id)->get(); 
        $page1 = episodes::select('*')->where('movie_id','=',$id)->paginate(3);
        return view ('moviedetail', ['detail1'=>$detail1,'page1'=>$page1]);
    }

    public function showcategory($id){
        $category1 =  movies::select('movies.id as iddetail','movies.*')->join('genres','movies.genre_id','genres.id')->where('movies.genre_id','=',$id)->get();
        $titlegen = genres::select('*')->where('id','=',$id)->get();
        return view ('category', ['category1'=>$category1,'titlegen'=>$titlegen]);
    }

}