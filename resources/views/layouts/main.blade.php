<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="/laravel/larablog/public/css/shared.css">
        
        @yield('links') 

        <script type="text/javascript" src="js/shared.js"></script>
        
        <title>Larablog</title>
    
    
    
    </head>

    <body>
        @guest
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
        @else 

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
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul> 
                </div>           
            </nav>
        </div>

        @endguest

        @yield('slider')

        @yield('content')

        @yield('content2')
        
        <!-- Footer -->
        <footer class="page-footer font-small blue pt-4">

            
            <div class="footer-copyright  py-3">
                <h6>Copyright © 2018</h6> 
                <h6 id="time"></h6>
            </div>

        </footer>

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <script>
        window.onscroll = function() {scrollFunction()};

        setInterval(showTime, 1000);
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  </body>
</html>
