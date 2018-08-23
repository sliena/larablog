<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="/laravel/larablog/public/css/shared.css">
        <link rel="stylesheet" href="/laravel/larablog/public/css/contacts.css"> 

        <script type="text/javascript" src="js/shared.js"></script>
        
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
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                </ul> 
            </div>           
        </nav>
    </div>

    <h1 id="contactMe">Contact me by sending an e-mail!</h1>


    <div class="row">
        <div class="col" id="formCol">
            <div class="container">    
                <form name=conForm method="POST">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter name" required >
                    </div>

                    <div class="form-group">
                        <label for="inputSurname">Surname</label>
                        <input type="text" name ="surname" class="form-control" id="inputSurname" placeholder="Enter surname" required>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label for="comment">Comment (max. 255)</label>
                        <textarea type="text" name="textarea" class="form-control" rows="5" id="comment" placeholder="Enter comment..." required maxlength="255"></textarea>
                    </div>  

                    <button type="submit" class="btn btn-primary">Send</button>

                    <button type="reset" class="btn btn-primary">Clear</button>

                </form> 
            </div>   
        </div>
        <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116985.81535014024!2d23.50474918819608!3d56.987244426705594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eee3577982f3b5%3A0xf00cfce435731c0!2s%C4%B6emeri+National+Park!5e0!3m2!1sen!2slv!4v1534851284187" width="1000" height="650"></iframe>
        </div>
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
