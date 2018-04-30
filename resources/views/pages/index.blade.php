@extends('main')

@section('title','About Us')

@section('content')

<div class="row">
    <div class="jumbotron">
        <h1>Laravel Blog Tutorials!</h1>
        <p>This is my first laravel complete blog tutorials project , Watch in detail, Thanks for watching</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        @foreach($posts as $post)
        <div class="post">
            <h3>{{ substr($post->title,0,50) }} {{ strlen($post->title) > 50 ? '...' : '' }}</h3>
            <p>{{ substr($post->body,0,300) }} {{ strlen($post->body) > 300 ? '...' : '' }}</p>
            <a href="{{ route('posts.show',$post->id) }}" class="btn btn-primary">Read more</a>
        </div>
        @endforeach
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h2>Side bard</h2>
    </div>
</div>

@endsection