@extends('layouts.app')
<body style="background:url('/storage/cover_images/2.jpg'); background-size: cover;">


@section('content')
   <h1>Create Post </h1>
    
   {!! Form::open(['action' => 'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
            {{ Form::label('title','Title')}}
        {{ Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}} 
    </div>
    <div class="form-group">
        {{ Form::label('location','Location')}}
    {{ Form::text('location','',['class'=>'form-control','placeholder'=>'Location'])}} 
</div>

    <div class="form-group">
            {{ Form::label('body','Description')}}
        {{ Form::textarea('body','',['class'=>'form-control','placeholder'=>'description'])}} 
    </div>
   

        CATAGORY
      
    <br>
        <select name="CATAGORY" id="">
            <option value="venue host">venue host  </option>
            <option value="photographer">  photographer </option>
            <option value="decoration">decoration  </option>
            <option value="performer "> performer  </option>
            <option value="food service">food service   </option>
            <option value="honeymoon package"> honeymoon package  </option>
        </select> 
    </br>
        <div class="form-group">
                {{Form::file('cover_image')}}
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            </div>
{!! Form::close() !!}
@endsection