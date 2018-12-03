@extends('layouts.app')
@section('content')
<div class="full-image">
        <div class="album py-5 bg-light ">
                <div class="container " style="max-width: 100%;text-align:center">
          
                    <h1>{{$houses->title}}</h1><br>
                    <h3>{{$houses->description}}</h3>
        
                    <img class="card-img-top" src="/storage/photos/{{$houses->apartment_id}}/{{ $houses->photo }}" alt="{{$houses->title}}"> 
                </div>
                <div class="row" style="margin:30px">
                        @if(!Auth::guest())
                              @if(Auth::user()->id == $houses->user_id)
                              
                                    <a class="btn btn-info" href="/apartments/show/{{$houses->apartment_id}}">Back to Houses</a>                         
                                    {!!Form::open(['action'=> ['housesController@destroy',$houses->id],'method'=> 'POST','class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete image',['class'=>'btn btn-danger'])}}
                                    {!!Form::close()!!}

                                    @else
                                    <a class="btn btn-info" href="/apartments/show/{{$houses->apartment_id}}">Back to Houses</a>
                               @endif
                               @else
                               <a class="btn btn-info" href="/apartments/show/{{$houses->apartment_id}}">Back to Houses</a>
                                   


                        @endif
                       

                      </div>
                   
        </div>
</div>


@endsection