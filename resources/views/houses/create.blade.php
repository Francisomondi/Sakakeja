@extends('layouts.app')
@section('content')
<h2>Create Apartment</h2>
<div class="jumbotron">
    <div class="row">
            {!! Form::open(['action'=>'housesController@store','method'=>'POST','enctype'=> 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title',' room title')}}
                {{Form::Text('title','',['class'=>'form-control','placeholder'=>'room title'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textArea('description', '', ['class'=>'form-control', 'placeholder'=>'Description'])}}
            </div>
            
           
            <div class="form-group">
                {{Form::hidden('apartment_id', $apartment_id)}}
            
            </div> 
            <div class="form-group">
                {{Form::label('photo', 'photo')}}
                {{Form::file('photo')}}
            </div>
            
            
            
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {{Form::submit('Create apartment', ['class'=>'btn btn-primary'])}}
                    <a class="btn btn-primary" href="/apartments" role="button">Back
                        &raquo;</a>
                </div>
            </div>
            {!! Form::close() !!}

    </div>
</div>
@endsection