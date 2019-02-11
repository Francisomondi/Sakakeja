@extends('layouts.app')
@section('content')
<h2>Create Room</h2>
<div class="jumbotron">
    <div class="row">
            {!! Form::open(['action'=>'roomsController@store','method'=>'POST','enctype'=> 'multipart/form-data']) !!}
            
            <div class="form-group">
                {{Form::label('title','Room Title')}}
                {{Form::Text('title' ,'',['class'=>'form-control','placeholder'=>'Room Title'])}}
            </div>
            
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textArea('description','', ['class'=>'form-control', 'placeholder'=>'Description'])}}
            </div>
           
           
          
           
            <div class="form-group">
                {{Form::hidden('house_id', $house_id)}}
               
            </div>
            <div class="form-group">
                {{Form::label('image', 'image')}}
                {{Form::file('image')}}
            </div>
           
            
            
            
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {{Form::submit('Create Room', ['class'=>'btn btn-primary'])}}
                    <a class="btn btn-primary" href="/apartments" role="button">Back
                        &raquo;</a>
                </div>
            </div>
            {!! Form::close() !!}

    </div>
</div>
@endsection