@extends('layouts.app')


@section('content')
   <h1> Posts</h1>
   <img style ="width:10%" src="/storage/cover_images/{{$post->cover_image}}">
<br> <br>
   <small>written on{{$post->created_at}}</small>
<div>
    {{$post->body}}
</div> 
@endsection