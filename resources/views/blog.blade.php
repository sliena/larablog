<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="/laravel/larablog/public/css/shared.css">
        <link rel="stylesheet" href="/laravel/larablog/public/css/blog.css"> 

        <script type="text/javascript" src="/laravel/larablog/public/js/shared.js"></script>
        
        <title>Larablog</title>
    
    
    
    </head>

  <body>
  
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/laravel/larablog/public/">Larablog</a>            
                <ul class="nav ml-auto text-monospace">
                    <li class="nav-item">
                        <a class="nav-link active"  href="/laravel/larablog/public/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/laravel/larablog/public/edit">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/laravel/larablog/public/contacts">Contacts</a>
                    </li>
                </ul> 
            </div>           
        </nav>
    </div>

    <div class="container-fluid ">
        <img src="{{$blogimage}}" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
            <div class="text-block"> 
                <h1 class="text-monospace">{{$blogtitle}}</h1>
            </div>
    </div>   

    <div id="bodyDiv">
        <p class="text-sans-serif">{{$blogbody}}</P>
    </div>

    <footer class="page-footer font-small blue pt-4">
            
        <div class="footer-copyright  py-3">
            <h6>Copyright © 2018</h6> 
            <h6 id="time"></h6>
        </div>

    </footer>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
    
        window.onscroll = function() {scrollFunction()};

        setInterval(showTime, 1000);

    </script>
  </body>
</html>
