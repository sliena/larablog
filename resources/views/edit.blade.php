@extends('layouts.main')

@section('links')
    <link rel="stylesheet" href="/laravel/larablog/public/css/edit.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
          @auth
          <!-- New Post Widget -->
          <div class="card my-4">
            <h5 class="card-header">New Post</h5>
            <div class="card-body">
              <form method="POST">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="title">Title:</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                  <label for="body">Content:</label>
                    <textarea class="form-control" rows="5" id="body" name="body"></textarea>
                </div>
                <div class="form-group">
                  <label for="title">Picture url:</label>
                  <input type="text" class="form-control" id="title" name="imgurl">
                </div>
                <button class="btn btn-primary" type="submit">Post</button>
              </form>
            </div>
          </div>
          @else
          <div class="card my-4">
            <p class="text-center"><a href="{{  route('login') }}">Login</a> to make a post</p>
          </div>
          @endauth
        </div>        
    </div>
@endsection