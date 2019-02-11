@extends('layouts.app')
@section('content')




<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
       
          <h1 class="display-4 font-italic">{{$apartments->name}}</h1>
          <p class="lead my-3"> {{$apartments->name}} Phone +254:{{$apartments->phone}}</p>
          <h2 class="card-text" style="color:#fff;border-radius:30px">{{$apartments->estate}}</h2>
          @if(!Auth::guest())
                @if(Auth::user()->id == $apartments->user_id)
          
                    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold"><a class="btn btn-secondary" href="/houses/create/{{$apartments->id}}">Create Houses To This Apartment</a></a></p>
                
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
                        @if(count($apartments->houses)>0)

                        @foreach($apartments->houses as $house)
                      <div class="col-md-3 selector-for-some-widget ">
                        <div class="card mb-3 shadow-sm" style="padding:10px;">
                        <h1>{{$house->title}}</h1>
                        <a href="/houses/show/{{$house->id}}">
                        <img class="card-img-top"  src="/storage/photos/{{$house->apartment_id}}/{{ $house->photo }}" alt="{{$house->title}}">
                        </a>
                          
                            <p class="card-text">{{$house->description}}</p>
                            
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="/houses/show/{{$house->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                              <a href="/houses/{{$house->id}}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                              </div>
                            <small class="text-muted">{{$house->created_at->diffForHumans()}}</small>
                            
                          </div>
                        </div>
                        
                      </div>
                      @endforeach

                      @else
                        <p>No Houses Added Yet</p>
                      
                      @endif
                      
                  </div>
                 
           
          <a class="btn btn-primary" href="/apartments/{{$apartments->id}}" role="button">Back
            </a>
</div>

@endsection
