@extends('layouts.app')
{!! Form::open(['action' => 'SearchController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
      
    {{ Form::text('title','',['class'=>'form-control','placeholder'=>'Location'])}} 
</div>
{!!Form::close()!!}
<div class="container">
  @if(isset($details))
      <p> The Search results for your query <b> {{ $query }} </b> are :</p>
  <h2>Sample User details</h2>
  <table class="table table-striped">
      <thead>
          <tr>
              <th>title</th>
              <th>id</th>
          </tr>
      </thead>
      <tbody>
          @foreach($details as $user)
          <tr>
              <td>{{$user->title}}</td>
              <td>{{$user->id}}</td>
          </tr>
          @endforeach
      </tbody>
  </table>
  @endif
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

@section('content')

   <h1>  SERVICE PROVIDERS</h1> 
  
   <div class="row">
     @foreach ($post as $post)
     
    
        
        
     <div class="col-sm-5 my-3">  
      <div class="card" style="width:400px">
        <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">{{$post->title}}</h4>
          <p class="card-text">POSTED ON:{{$post->created_at}}</p>
          <a href="/posts/{{$post->id}}" class="btn btn-primary">Check Out</a>
        </div>
      </div>
      
    </div>
  
  



   @endforeach
  </div>
  
  
  
@endsection
</html>