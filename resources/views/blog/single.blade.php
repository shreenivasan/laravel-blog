@extends('main')

@section('title', "| $post->title")

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->slug }}</p>
        <p>{{ $post->body }}</p>
        <p>Published on : {{ date('M j,Y' , strtotime($post->created_at)) }}</p>
    </div>
</div>

@endsection