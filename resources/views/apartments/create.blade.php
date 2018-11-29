@extends('layouts.app')
@section('content')
<h2>Create Apartment</h2>
<div class="jumbotron">

{!! Form::open(['action'=>'apartmentsController@store','method'=>'POST','enctype'=> 'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('name','Apartment name')}}
    {{Form::Text('name','',['class'=>'form-control','placeholder'=>'apartment name'])}}
</div>

<div class="form-group">
    {{Form::label('description', 'Description')}}
    {{Form::textArea('description', '', ['class'=>'form-control', 'placeholder'=>'Description'])}}
</div>
<div class="form-group">
    {{Form::label('location', 'location')}}
    {{Form::textArea('location', '', ['class'=>'form-control', 'placeholder'=>'location'])}}
</div>
<div class="form-group">
    {{Form::label('cover_image', 'Cover image')}}
    {{Form::file('cover_image')}}
</div>



<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        {{Form::submit('Create apartment', ['class'=>'btn btn-primary'])}}
        <a class="btn btn-primary" href="/home" role="button">Back
            &raquo;</a>
    </div>
</div>
{!! Form::close() !!}
</div>
@endsection