@extends('layouts.app')
@section('content')
<h2>Create House</h2>
<div class="jumbotron">
    <div class="row">
            {!! Form::open(['action'=>'housesController@store','method'=>'POST','enctype'=> 'multipart/form-data']) !!}
            
            <div class="form-group">
                {{Form::label('title','House Title')}}
                {{Form::Text('title' ,'',['class'=>'form-control','placeholder'=>'House Title'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textArea('description','', ['class'=>'form-control', 'placeholder'=>'Description'])}}
            </div>
            <div class="form-group">
                {{Form::label('estate', 'Estate')}}
                {{Form::text('estate', '', ['class'=>'form-control', 'placeholder'=>'Estate'])}}
            </div>
            <div class="form-group">
                {{Form::label('price', 'Price')}}
                {{Form::text('price','', ['class'=>'form-control', 'placeholder'=>'Price in kshs'])}}
            </div>
            <div class="form-group">
                {{Form::label('category','Category name')}}
                {{Form::Text('category','',['class'=>'form-control','placeholder'=>'Category name eg One bedroom,bed seater'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('cover_image', 'Cover image')}}
                {{Form::file('cover_image')}}
            </div>
           
            
            
            
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {{Form::submit('Create House', ['class'=>'btn btn-primary'])}}
                    <a class="btn btn-primary" href="/home" role="button">Back
                        &raquo;</a>
                </div>
            </div>
            {!! Form::close() !!}

    </div>
</div>
@endsection