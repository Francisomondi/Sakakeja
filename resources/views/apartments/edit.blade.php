@extends('layouts.app')
@section('content')
<h2>Edit Apartment</h2>
<div class="jumbotron">
    <div class="row">
            {!! Form::open(['action'=>['apartmentsController@update','method'=>'POST',$apartments->id],'enctype'=> 'multipart/form-data']) !!}
            {{Form::hidden('_method','PUT')}}
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
                {{Form::label('phone','Apartment Phone')}}
                {{Form::Text('phone',$apartments->phone,['class'=>'form-control','placeholder'=>'Apartment phone'])}}
            </div>
           
            
            <div class="form-group">
                {{Form::label('cover_image', 'Cover image')}}
                {{Form::file('cover_image')}}
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {{Form::submit('Update Apartment', ['class'=>'btn btn-primary'])}}
                    <a class="btn btn-primary" href="/apartments" role="button">Back
                        &raquo;</a>
                </div>
            </div>
            {!! Form::close() !!}

    </div>
</div>
@endsection