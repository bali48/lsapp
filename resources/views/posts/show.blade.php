@extends('layouts.app')
    @section('content')
        @if(count($post)>0)
            <h1>{{$post->title}}</a></h1>
                    <div>{!! $post->body !!}</div>
                    
                    @if(!Auth::guest())
                        @if(Auth::user()->id == $post->user_id)
                            <hr>
                            <small><i class="fa fa-calendar" aria-hidden="true"></i>{{$post->created_at}} by {{$post->user->name}}</small>
                            <hr>
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit </a> 
                            {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method' =>'POST', 'class' => 'pull-right']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                            {!! Form::close() !!}
                        @endif
                    @endif
            @else
                <h1>Nothing Found</h1> 
        @endif
        
    @endsection
