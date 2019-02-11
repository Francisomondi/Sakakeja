@extends('layouts.app')
@section('content')
<h2>Create Apartment</h2>

    
            {!! Form::open(['action'=>'apartmentsController@store','method'=>'POST','enctype'=> 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('name','Apartment Name')}}
                {{Form::Text('name','',['class'=>'form-control','placeholder'=>'Apartment Name'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textArea('description', '', ['class'=>'form-control', 'placeholder'=>'Description'])}}
            </div>
            <div class="form-group">
                {{Form::label('estate', 'Estate')}}
                {{Form::text('estate', '', ['class'=>'form-control', 'placeholder'=>'Estate'])}}
            </div>
             <div class="form-group">
                {{Form::label('phone','Apartment Phone')}}
                {{Form::Text('phone','',['class'=>'form-control','placeholder'=>'Apartment phone'])}}
            </div>
           
            <div class="form-group">
                {{Form::label('cover_image', 'Cover image')}}
                {{Form::file('cover_image')}}
            </div>
           
            
            
            
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {{Form::submit('Create apartment', ['class'=>'btn btn-primary'])}}
                    <a class="btn btn-primary" href="/home" role="button">Back
                    </a>
                </div>
            </div>
            {!! Form::close() !!}

    

@endsection