@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    @if(count($posts)>0)
        <table class="table table-striped table-dark">
            <thead class="text-center">
                <tr>
                <th scope="col">Post Title</th>
                <th scope="col">Post Description</th>
                <th scope="col">Edit Post</th>
                <th scope="col">Delete Post</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                <td>{{$post->title}}</td>
                <td>{!! str_limit($post->body, 50) !!}</td>
                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                <td>{!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method' =>'POST', 'class' => 'pull-right']) !!}
                      {{Form::hidden('_method','DELETE')}}
                      {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}</td>
                </tr>

            @endforeach
        </table>
    @endif
</div>
@endsection
