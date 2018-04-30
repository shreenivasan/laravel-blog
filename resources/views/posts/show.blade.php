@extends('main')

@section('title',' | View Post')

@section('content')

	<div class="row">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                <p class="lead">{{ $post->body }}</p>
                <hr>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                            <label>Url:</label>
                            <p><a href="{{ url($post->slug) }}">{{ url($post->slug) }}</a></p>
                    </dl>
                </div>

        </div>

@endsection