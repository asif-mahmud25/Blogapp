@extends('layouts.app')

@section('content')
    
    <div>
            <a class="mb-5 btn btn-secondary" href="/posts">Go Back</a>
    </div>
    <h1>{{$post->title}}</h1>
    <img class = "mb-5 mt-5"style="width:100%"src="/storage/cover_images/{{$post->cover_image}}" alt=""> 
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="mt-2 mb-2 btn btn-primary">Edit Post</a>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'mt-2 mb-2 btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection  