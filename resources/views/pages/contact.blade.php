@extends('main')

@section('title',' | About Us')

@section('content')

<div class="row">
    <div class="col-md-12">
    {!! Form::open(['url'=>'/']) !!}
          
    <div class="form-group">
    {{ Form::label('email', 'Email : ') }}
    {{ Form::text('email',null,['class'=>'form-control']) }}
    </div>
    
    <div class="form-group">
    {{ Form::label('subject', 'Subject : ') }}
    {{ Form::text('subject',null,['class'=>'form-control']) }}
    </div>
    
    <div class="form-group">
    {{ Form::label('message', 'Message : ') }}
    {{ Form::textarea('message',null,['class'=>'form-control']) }}
    </div>
    
    <div class="form-group">
    {{ Form::submit('Submit Query', array('class' => 'btn btn-success btn-block btn-margin-18px')) }}
    </div>
    
    {!! Form::close() !!}
    
    </div>
</div>

@endsection