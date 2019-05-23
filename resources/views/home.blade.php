@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="/posts/create">Create Post</a>
                    <br><br>
                    <h3>Your Blog Posts!</h3>
                    @if(count($posts)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST','class'=>'float-right']) !!}
                                        {{Form::hidden('_method','Delete')}}
                                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr> 
                            @endforeach
                        </table>
                    @else
                        <p>You have no Posts!!</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
