@extends('layouts.app')



@section('content')

                    <h1>Create estate</h1>
                    <hr>
                    {!! Form::open(['action'=>'estatesController@store','method'=>'POST']) !!}
                        <div class="form-group">
                            {{Form::label('name','Estate name')}}
                            {{Form::Text('name','',['class'=>'form-control','placeholder'=>'Estate name'])}}
                        </div>
                    
                        <div class="form-group">
                            {{Form::label('location', 'Location')}}
                            {{Form::textArea('location', '', ['class'=>'form-control', 'placeholder'=>'Location'])}}
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                {{Form::submit('Create Estate', ['class'=>'btn btn-primary'])}}
                                <a class="btn btn-primary" href="/home" role="button">Back
                                    &raquo;</a>
                            </div>
                        </div>
                    {!! Form::close() !!}

@endsection

