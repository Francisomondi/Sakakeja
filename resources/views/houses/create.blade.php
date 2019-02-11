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
                {{Form::hidden('apartment_id', $apartment_id)}}
               
            </div>
            <div class="form-group">
                {{Form::label('category', 'category')}}
                {{Form::select('category',['Single room' => 'Single room', 'Bed sitter' => 'Bed sitter','One Bedroom' => 'One Bedroom', 'Two Bedroom' => 'Two Bedroom','Three Bedroom' => 'Three Bedroom', 'Office' => 'Office', 'Full house' => 'Full house'],'Choose Category')}}
            </div>
            <div class="form-group">
                {{Form::label('price', 'Price')}}
                {{Form::number('price', '', ['class'=>'form-control', 'placeholder'=>'Price in kshs'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('photo', 'photo')}}
                {{Form::file('photo')}}
            </div>
           
            
            
            
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {{Form::submit('Create House', ['class'=>'btn btn-primary'])}}
                    <a class="btn btn-primary" href="/apartments" role="button">Back
                        &raquo;</a>
                </div>
            </div>
            {!! Form::close() !!}

    </div>
</div>
@endsection