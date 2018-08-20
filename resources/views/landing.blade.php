<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="/laravel/larablog/public/css/shared.css">
        <link rel="stylesheet" href="/laravel/larablog/public/css/landing.css"> 

        
        <title>Blog</title>
    
    
    
    </head>

  <body>
  
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/laravel/larablog/public/">Zlog</a>            
                <ul class="nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active"  href="/laravel/larablog/public/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                </ul> 
            </div>           
        </nav>
    </div>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/laravel/larablog/public/images/red_rose.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/laravel/larablog/public/images/green_rose.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/laravel/larablog/public/images/blue_rose.jpg" alt="Third slide">
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
        <div class="row">
            

                @foreach ($items as $blogitem)

                <div class="col>" style="width: 30%">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h2 class="card-title" style="height: 50%">{{$blogitem->title}}</h5>
                            <p class="card-text">{{$blogitem->body}}</p>
                            <a href="/laravel/larablog/public/blog/{{$blogitem->id}}" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>

                @endforeach
                <div class="container-fluid">
                {{$items->links()}}
                </div>
             
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
