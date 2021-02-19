@extends('layout.main')

@section('title', 'BeeFlix')

@section('container')
<style>
  .carousel-item {
    height: 600px;
  }

  .carousel-item img {
    margin-top: 55px;
  }

  .carousel-item .btn {
    background-color: cadetblue;
    border: none;
    border-radius: 25px;
    padding-right: 25px;
    padding-left: 25px;
    margin-top: 40px;
  }
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/lion king.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/dots.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/bossheader.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <h2 class="text-center font-weight-bold m-4">DRAMA</h2>

    <div class="container" style="height:190vh">
      <div class="row mx-auto">
      @foreach ($alldramas as $a)
        <div class="card mr-3 ml-3" style="width: 15rem;">
          <img src="{{$a->photo}}" class="card-img-top" alt="...">
          <div class="card-body bg-light">
            <h4 class="card-title text-center">{{$a->title}}</h4>
          </div>
            <a href="/{{$a->id}}" class="btn btn-warning">View Movies</a>
        </div>
      @endforeach  
    </div>

      <br>
      <h2 class="text-center font-weight-bold m-4">KIDS</h2>

      <div class="row mx-auto mt-5">
      @foreach ($alldramas2 as $a)
        <div class="card mr-3 ml-3" style="width: 15rem;">
          <img src="{{$a->photo}}" class="card-img-top" alt="...">
          <div class="card-body bg-light">
            <h5 class="card-title">{{$a->title}}</h5><br>
          </div>
            <a href="/{{$a->id}}" class="btn btn-warning">View Movie</a>
        </div>
      @endforeach
    </div>

    <br>
    <h2 class="text-center font-weight-bold m-4">TV SERIES</h2>

    <div class="row mx-auto mt-5">
      @foreach ($alldramas3 as $a)
        <div class="card mr-3 ml-3" style="width: 15rem;">
          <img src="{{$a->photo}}" class="card-img-top" alt="...">
          <div class="card-body bg-light">
            <h5 class="card-title">{{$a->title}}</h5><br>
          </div>
            <a href="/{{$a->id}}" class="btn btn-warning">View Movie</a>
        </div>
        @endforeach
      </div>
@endsection