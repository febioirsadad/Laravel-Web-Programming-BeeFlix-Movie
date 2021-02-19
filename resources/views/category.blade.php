@extends('layout.main')

@section('title', 'BeeFlix')

@section('container')

    <br><br><br>
    @foreach($titlegen as $t)
    <h2 class="text-center font-weight-bold m-4">{{$t->name}}</h2>
    @endforeach
    <div class="container">
        <div class="row mx-auto">
        @foreach($category1 as $d)
            <div class="card mr-3 ml-3" style="width: 15rem;">
                <img src="{{URL::asset($d->photo)}}" class="card-img-top" alt="...">
                <div class="card-body bg-light">
                    <h4 class="card-title text-center">{{$d->title}}</h4>
                </div>
                    <a href="/{{$d->id}}" class="btn btn-warning">View Movie</a>
                </div>
        @endforeach
        </div>
    </div>
@endsection