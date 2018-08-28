@extends('layouts.main')

@section('links')
    <link rel="stylesheet" href="/laravel/larablog/public/css/contacts.css">
@endsection

@section('content')
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
@endsection