@extends('layout.main')

@section('title', 'BeeFlix')

@section('container')
    
    <br><br>
    <div class="container mt-5">
        <div class="row">
        @foreach($detail1 as $b)
            <div class="col-sm-4">
                <img src="{{URL::asset($b->photo)}}" alt="" style="width:17rem; height:23rem;">
            </div>
            <div class="col-sm-4">
                <h3 class="font-weight-bold">{{$b->title}}</h3>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star-half-alt text-success"></i>
                <i class="far fa-star text-success">{{$b->rating}}</i> <br><br>
                <p>{{$b->description}}</p>
                <br>
                <p>Kategori: <a href="/category/{{$b->id}}">{{$b->name}}</a></p>
            </div>
          @endforeach
            <div class="col-sm-4">
                <h4>EPISODE</h4> <br>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">episode</th>
                        <th scope="col">judul</th>
                      </tr>
                    </thead>
                    @foreach($page1 as $c)
                    <tbody>
                      <tr>
                        <td>{{$c->episode}}</td>
                        <td>{{$c->title}}</td>
                      </tr>
                    </tbody>
                    @endforeach
                </table>
                <br>
                {{$page1->links()}}
            </div>
        </div>
    </div>

@endsection