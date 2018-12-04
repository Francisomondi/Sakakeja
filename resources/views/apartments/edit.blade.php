@extends('layouts.app')
@section('content')
<h2>Edit Apartment</h2>
<div class="jumbotron">
    <div class="row">
            {!! Form::open(['action'=>['apartmentsController@update','method'=>'POST',$apartments->id],'enctype'=> 'multipart/form-data']) !!}
       
            
            <div class="form-group">
                {{Form::label('name','Apartment name')}}
                {{Form::Text('name',$apartments->name,['class'=>'form-control','placeholder'=>'apartment name'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textArea('description', $apartments->description, ['class'=>'form-control', 'placeholder'=>'Description'])}}
            </div>
            <div class="form-group">
                {{Form::label('estate', 'estate')}}
                {{Form::text('estate', $apartments->estate, ['class'=>'form-control', 'placeholder'=>'estate'])}}
            </div>
            <div class="form-group">
                {{Form::label('price', 'price')}}
                {{Form::text('price', $apartments->price, ['class'=>'form-control', 'placeholder'=>'price in kshs'])}}
            </div>
            <div class="form-group">
                {{Form::label('category','category name')}}
                {{Form::Text('category',$apartments->category,['class'=>'form-control','placeholder'=>'category name eg One bedroom,bed seater'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('cover_image', 'Cover image')}}
                {{Form::file('cover_image')}}
            </div>
            <div class="form-group">
                {{Form::hidden('_method','PUT')}}
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