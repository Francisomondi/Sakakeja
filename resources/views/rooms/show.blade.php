@extends('layouts.app')
@section('content')
<div class="full-image">
        <div class="album py-5 bg-light ">
                <div class="container " style="max-width: 100%;text-align:center">
          
                    <h1>{{$rooms->title}}</h1><br>
                    <h3>{{$rooms->description}}</h3>
        
                    <img class="card-img-top" style="padding:30px;" src="/storage/images/{{$rooms->house_id}}/{{ $rooms->image }}" alt="{{$rooms->title}}"> 
                </div>
                <div class="row" style="margin:30px">
                        @if(!Auth::guest())
                              @if(Auth::user()->id == $rooms->user_id)
                              
                                    <a class="btn btn-info" href="/houses/show/{{$rooms->house_id}}">Back to Rooms</a>                         
                                    {!!Form::open(['action'=> ['roomsController@destroy',$rooms->id],'method'=> 'POST','class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete image',['class'=>'btn btn-danger'])}}
                                    {!!Form::close()!!}

                                    @else
                                    <a class="btn btn-info"  href="/houses/show/{{$rooms->house_id}}">Back to Rooms</a>
                               @endif
                               @else
                               <a class="btn btn-info"  href="/houses/show/{{$rooms->house_id}}">Back to Rooms</a>
                                   


                        @endif
                       

                      </div>
                   
        </div>
</div>



@endsection     