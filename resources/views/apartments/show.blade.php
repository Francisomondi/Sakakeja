@extends('layouts.app')
@section('content')
<h1>{{$apartments->name}}</h1>

<a class="btn btn-primary" href="/apartments">  back</a>
<a class="btn btn-secondary" href="/houses/create/{{$apartments->id}}">upload images to this house</a>
<hr>

<div class="album py-5 bg-light">
        <div class="container" style="max-width: 100%;text-align:center">
          <h2 class="card-text" style="background: #fff;color:black;border-radius:30px">{{$apartments->estate}}</h2>
               
        
                <div class="row">
                        @if(count($houses)>0)

                        @foreach($houses as $house)
                      <div class="col-md-5 selector-for-some-widget ">
                        <div class="card mb-3 shadow-sm" >
                        <h1>{{$house->title}}</h1>
                        <a href="/houses/show/{{$house->id}}">
                        <img class="card-img-top" src="/storage/photos/{{$house->apartment_id}}/{{ $house->photo }}" alt="{{$house->title}}">
                        </a>
                          <div class="card-body">
                            <p class="card-text">{{$house->description}}</p>
                            
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="/houses/show/{{$house->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                              </div>
                              <small class="text-muted">{{$house->created_at}}</small>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                      @endforeach

                      @else
                        <p>no apartments found</p>
                      
                      @endif
                      
                  </div>
                 
            </div>
          <a class="btn btn-primary" href="/apartments/{{$apartments->id}}" role="button">Back
            </a>
</div>

@endsection
