@extends('layouts.app')


@section('content')
   <h1>Edit Post </h1>
    
   {!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
            {{ Form::label('title','Title')}}
        {{ Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}} 
    </div>
    <div class="form-group">
            {{ Form::label('body','Body')}}
        {{ Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'description'])}} 
    </div>
   

        CATAGORY
      
    </br>
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
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            </div>
{!! Form::close() !!}
@endsection