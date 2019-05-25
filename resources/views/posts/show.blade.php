@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-outline-dark">Go Back</a> 
    <br><br>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>
    <div>
        {!!$post->body!!} {{-- {!! Text!!} to parse html --}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>
            {!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST','class'=>'float-right']) !!}
                {{Form::hidden('_method','Delete')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection