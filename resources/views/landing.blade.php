<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="/laravel/larablog/public/css/shared.css">
        <link rel="stylesheet" href="/laravel/larablog/public/css/landing.css"> 

        
        <title>Larablog</title>
    
    
    
    </head>

  <body>
  
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/laravel/larablog/public/">Larablog</a>            
                <ul class="nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active"  href="/laravel/larablog/public/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/laravel/larablog/public/contacts">Contacts</a>
                    </li>
                </ul> 
            </div>           
        </nav>
    </div>

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



    <div class="container">
        
            

                @foreach ($items as $blogitem)
                
                <div class="card" style="width: 20rem; text-align:center; display:inline-block;">
                    <img class="card-img-top" src="https://www.w3schools.com/w3css/img_lights.jpg" alt="Card image cap" height="200" width="200">
                        <div class="card-img-overlay">
                            <h4 class="card-title">{{$blogitem->title}}</h4>
                        </div>
                    <div class="card-block">                    
                        <p class="card-text">{{$blogitem->body}}</p>
                        <a href="/laravel/larablog/public/blog/{{$blogitem->id}}" class="btn btn-primary">Read more</a>
                    </div>
                </div>

                @endforeach


                <div class="container-fluid">
                {{$items->links()}}
                </div>
                     
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    </div> 




    







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
    
        window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            function topFunction() {
                $('html, body').animate({scrollTop:0}, 'slow');
            }

    </script>
  </body>
</html>
