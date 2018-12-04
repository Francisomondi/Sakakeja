@extends('layouts.app')
@section('content')
<h2>Create Apartment</h2>
<div class="jumbotron">
    <div class="row">
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
                {{Form::label('estate', 'estate')}}
                {{Form::text('estate', '', ['class'=>'form-control', 'placeholder'=>'estate'])}}
            </div>
            <div class="form-group">
                {{Form::label('price', 'price')}}
                {{Form::text('price', '', ['class'=>'form-control', 'placeholder'=>'price in kshs'])}}
            </div>
            <div class="form-group">
                {{Form::label('category','category name')}}
                {{Form::Text('category','',['class'=>'form-control','placeholder'=>'category name eg One bedroom,bed seater'])}}
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
</div>
@endsection