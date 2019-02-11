
@extends('layouts.app')
@section('content')

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
       
          <h1 class="display-4 font-italic">{{$house->name}}</h1>
          <p class="lead my-3"> {{$house->name}}</p>
          @if(!Auth::guest())
                @if(Auth::user()->id == $houses->user_id)
          
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold"><a class="btn btn-secondary" href="/rooms/create/{{$houses->id}}">Create rooms To This House</a></a></p>
                
                @else
                  <a class="btn btn-primary" href="/apartments">Back</a>
                @endif
                @else
                <a class="btn btn-primary" href="/apartments">Back</a>
   


       @endif
          
        </div>
       

      </div>

<hr>

<div class="album py-5 bg-light">
    
                <div class="row">
                        @if(count($houses->rooms)>0)

                        @foreach($houses->rooms as $room)
                      <div class="col-md-3 selector-for-some-widget ">
                        <div class="card mb-3 shadow-sm" style="padding:10px;">
                        <h1>{{$room->title}}</h1>
                        <a href="/houses/show/{{$houses->id}}">
                        <img class="card-img-top"  src="/storage/photos/{{$houses->apartment_id}}/{{ $houses->image }}" alt="{{$houses->title}}">
                        </a>
                          
                            <p class="card-text">{{$room->description}}</p>
                            
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="/rooms/show/{{$room->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                              <a href="/houses/{{$room->house_id}}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                              </div>
                            <small class="text-muted">{{$room->created_at}}</small>
                            
                          </div>
                        </div>

                        @if(!Auth::guest())
                        @if(Auth::user()->id == $house->user_id)
                           <div class="card-footer">
                             {!!Form::open(['action'=> ['housesController@destroy',$house->id],'method'=> 'POST','class'=>'pull-right'])!!}
                                 {{Form::hidden('_method','DELETE')}}
                                 {{Form::submit('Delete image',['class'=>'btn btn-sm btn-outline-secondary'])}}
                                 {!!Form::close()!!}
                           </div>
                          
                           @endif
                      
                       @endif
                        
                      </div>
                      @endforeach

                      @else
                        <p>No Rooms Added Yet</p>
                      
                      @endif
                      
                  </div>
                 
           
          <a class="btn btn-primary" href="/houses/{{$houses->id}}" role="button">Back
            </a>
</div>

@endsection















