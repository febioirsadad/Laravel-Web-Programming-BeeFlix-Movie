<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/fontawesome/css/all.min.css">
        <title>@yield('title')</title>

        <style>
            .card{
                position: relative;
                transition: transform 0.3s ease;
                transform: translateY(0px);
                width: 100px;
            }

            .card:hover{
            transform: translateY(25px);
            }
        </style>
    </head>

    <body>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
            <div class="container">
            <h3><i class="fas fa-bug text-warning mr-2"></i></h3>
            <a class="navbar-brand text-white" href="\">BeeFlix</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="\">HOME <span class="sr-only">(current)</span></a>
                </li>
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-info" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CATEGORIES
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <?php $g=DB::table('genres')->get()?>
                @foreach($g as $g)
                    <a class="dropdown-item" href="{{url('category',$g->id)}}">{{$g->name}}</a>
                @endforeach
                </div>
                </div>
            </ul>
            <div id="date" class="text-white ml-auto"></div>
                <script>
                var d = new Date();
                var n = d.toDateString();
                document.getElementById("date").innerHTML = n;
                </script>
            
            </div>
            </div>
        </nav>

        @yield('container')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </body>