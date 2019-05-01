@extends('layouts.app')


@section('content')
   <h1> Posts1</h1>
   <img style ="width:30%" src="/storage/cover_images/{{$post->cover_image}}">
<br> <br>
   <small>written on{{$post->created_at}}</small>
<div>
    {{$post->body}}
</div> 
<h1>Fix a date:</h1>
{!! Form::open(['action' => ['OrderController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}


  <div class="form-group"> 


<input type="date" class="form-control" required id="dp" name="event"/>
{{Form::hidden('_method','PUT')}}

{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
</div>
  {!! Form::close() !!}


</body>
</html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div>
   <h3><a href="/about">ORDER</a></h3>
   <div class="w3-container">
   <a href="/about" class="w3-btn w3-black">ORDER</a>
</div>
</div> 
@endsection