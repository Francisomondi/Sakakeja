@extends('layouts.app')



@section('content')

                   <h1>Create Company</h1> 
                    <hr>
                    {!! Form::open(['action'=>'companiesController@store','method'=>'POST']) !!}
                        <div class="form-group">
                            {{Form::label('name','Company name')}}
                            {{Form::Text('name','',['class'=>'form-control','placeholder'=>'Company name'])}}
                        </div>
                    
                        <div class="form-group">
                            {{Form::label('description', 'Description')}}
                            {{Form::textArea('description', '', ['class'=>'form-control', 'placeholder'=>'Description'])}}
                        </div>
                    
                        <div class="form-group">
                            {{Form::label('email', 'E-Mail Address')}}
                            {{Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email-Address'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('phone', 'Phone Number')}}
                            {{Form::tel('phone','',['class'=>'form-control', 'placeholder'=>'phone number'])}}
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                {{Form::submit('Create Company', ['class'=>'btn btn-primary'])}}
                                <a class="btn btn-primary" href="/home" role="button">Back
                                    &raquo;</a>
                            </div>
                        </div>
                    {!! Form::close() !!}

@endsection

