@extends('layouts.main')

    @section('links')
        <link rel="stylesheet" href="/laravel/larablog/public/css/landing.css">
    @endsection
    
    @section('slider')
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://wallpaper.wiki/wp-content/uploads/2017/05/Photos-Download-Desktop-HD-Wallpapers-Wide.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://ultrawidewallpapers.com/wp-content/uploads/2015/09/fog-of-war-3440x1440.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://ultrawidewallpapers.com/wp-content/uploads/2015/09/hovering-fog-3440x1440.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://hdwallpapersbuzz.com/wp-content/uploads/2017/03/ultra-wide-wallpaper-images-16.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://www.hddesktops.com/web/wallpapers/splashing-oceans/5120x2160.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    @endsection

    @section('content')
        <div class="container">
            
            @foreach ($items as $blogitems)
            
            <a id="card-link" href="/laravel/larablog/public/blog/{{$blogitems->id}}" target="_blank">
                <div class="card">
                    <img class="card-img-top" src="{{$blogitems->imgurl}}" alt="Card image cap" height="200" width="200">
                        <div class="card-img-overlay">
                            <h4 class="card-title text-monospace">{{$blogitems->title}}</h4>
                        </div>
                    <div class="card-block">                    
                        <p class="card-text text-justify text-monospace">{{$blogitems->body}}</p>                  
                    </div>
                </div>
            </a>

            @endforeach

            <div class="container-fluid">
                {{$items->links()}}
            </div>
        
        </div>
    @endsection