@extends('layouts.app')
    @section('content')
         <h1>Create Post </h1>
        {!! Form::open(['action' => 'PostsController@store']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
            </div>    
            <div class="form-group">
                {{Form::text('title','',['class' => 'form-control','placeholder' => 'enter the title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
            </div>    
            <div class="form-group">
                {{Form::textarea('body','',['id' => 'article-ckeditor','class' => 'form-control','placeholder' => 'Body Text'])}}
            </div>
            {{Form::submit('submit',['class' => 'btn btn-success'])}}
        {!! Form::close() !!}   
        
    @endsection
