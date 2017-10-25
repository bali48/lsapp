@extends('layouts.app')
    @section('content')
         
        @if(count($post)>0)
            @foreach( $post as $p)
                <div class="well">
                    <h1><a href="/posts/{{$p->id}}">{{$p->title}}</a></h1>
                  <hr>
                    <span><i class="fa fa-calendar" aria-hidden="true"></i>{{$p->created_at}} by {{$p->user->name}}</span>
                    <hr>
                      
                </div>
                <hr>
                
            @endforeach
            {{$post->links()}}
            @else
             <h1> Sorry No Post Found </h1>
        @endif
        
    @endsection
