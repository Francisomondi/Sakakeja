@extends('layouts.app')
@section('content')

<div class="album py-5 bg-light">
        <div class="container" style="max-width: 100%;text-align:center">
               
          
                <div class="row">
                        @if(count($apartments)>0)

                        @foreach($apartments as $apartment)
                      <div class="col-md-2 selector-for-some-widget ">
                        <div class="card mb-3 shadow-sm" >
                        <h3>{{$apartment->name}}</h3>
                        
                        <a href="/apartments/{{$apartment->id}}">
                        <img class="card-img-top" src="/storage/cover_images/{{ $apartment->cover_image }}" alt="apartment cover image">
                        </a>
                          <div class="card-body">
                            <p class="card-text">{{$apartment->description}}</p>
                            <p class="card-text" style="background: #fff;color:black;border-radius:30px">Estate: {{$apartment->estate}}</p>
                            <p class="card-text" style="background: #f57f27;color:black">price: {{$apartment->price}}</p>
                            
                            <small class="text-muted" style="font-size:15px">{{$apartment->category}}</small>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="/apartments/show/{{$apartment->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                <a href="/apartments/{{$apartment->id}}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                              </div>
                            <small class="text-muted">{{$apartment->created_at}}</small>
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
           
          <a class="btn btn-primary" href="/companies" role="button">Back
              &raquo;</a>
</div>





@endsection
