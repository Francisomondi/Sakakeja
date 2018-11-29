@extends('layouts.app')
@section('content')
<main role="main">


<div class="album py-5 bg-light">
        <div class="container">
               
        
                <div class="row">
                        @if(count($apartments)>0)

                        @foreach($apartments as $apartment)
                      <div class="col-md-2 selector-for-some-widget ">
                        <div class="card mb-2 shadow-sm" >
                        <h3>{{$apartment->name}}</h3>
                        <img class="card-img-top" src="/storage/cover_images/{{ $apartment->cover_image }}" alt="apartment cover image">
                          <div class="card-body">
                            <p class="card-text">{{$apartment->description}}.</p>
                            <button class="btn btn-default " style="aligh: center">{{$apartment->category}}</button>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                              </div>
                              <small class="text-muted">9 mins</small>
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
</div>


</main>

@endsection
