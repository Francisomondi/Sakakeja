@extends('layouts.app')


@section('content')
      
    {!! Form::open(['action'=>['companiesController@update',$companies->id],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('name','Company name')}}
        {{Form::Text('name',$companies->name,['class'=>'form-control','placeholder'=>'Company name'])}}
    </div> 

    <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textArea('description', $companies->description, ['class'=>'form-control', 'placeholder'=>'Description'])}}
    </div>

    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', $companies->email, ['class'=>'form-control', 'placeholder'=>'Email-Address'])}}
    </div>
    <div class="form-group">
        {{Form::label('phone', 'Phone Number')}}
        {{Form::tel('phone',$companies->phone,['class'=>'form-control', 'placeholder'=>'phone number'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Edit Company', ['class'=>'btn btn-primary'])}}

{!! Form::close() !!}


    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
      <div class="list-group">
      <a href="/companies/{{ $companies->id }}/edit" class="list-group-item ">Edit</a>
        <a href="#" class="list-group-item">Delete</a>
        <a href="#" class="list-group-item">Add Estates</a>
    
        
      </div>
    </div><!--/.sidebar-offcanvas-->
  </div><!--/row-->

  <hr>


@endsection

