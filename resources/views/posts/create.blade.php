@extends('main')

@section('title',' | Create Blog')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::open(['route' => 'posts.store']) !!}
        
            {{ Form::label('title', 'Title : ') }}
            {{ Form::text('title', null,['class'=>'form-control']) }}
            
            {{ Form::label('slug', 'Slug : ') }}
            {{ Form::text('slug', null,['class'=>'form-control']) }}
            
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', null,['class'=>'form-control']) }}
            
            {{ Form::submit('Save', array('class' => 'btn btn-primary btn-block btn-margin-18px')) }}
        
        {!! Form::close() !!}
        
    </div>
</div>

@endsection

