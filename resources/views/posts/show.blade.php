@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-outline-dark">Go Back</a>
    <br><br>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!} {{-- {!! Text!!} to parse html --}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection