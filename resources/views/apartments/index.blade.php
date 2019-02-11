@extends('layouts.app')
@section('content')
<div class="container"> 
  <div class="jumbotron"> 
      <h1>Looking For Vaccant Rentals,Offies or Homes to Buy Around You??</h1>
  
      <p class="welcome">SakaHouse offers a platform to  help you find rental houses and Homes to buy  at the best price from a location of your
          choice with just a click of a button.</p>
      <hr style="background-color:antiquewhite">
  </div>                     
 

</div>

<div class="album py-5 bg-light">
          
                <div class="row" >
                        @if(count($apartments)>0)

                        @foreach($apartments as $apartment)
                    
                      <div class="col-md-3 col-lg-2 col-sm-12 col-xs-12 selector-for-some-widget">
                        <div class="card mb-3 shadow-sm" >
                        <h3>{{$apartment->name}}</h3>
                        
                        <a href="/apartments/{{$apartment->id}}">
                        <img class="card-img-top" src="/storage/cover_images/{{ $apartment->cover_image }}" alt="apartment cover image">
                        </a>
                          <div class="card-body">
                            <p class="card-text">{{$apartment->description}}</p>
                            <p class="card-text estate" >Estate: {{$apartment->estate}}</p>
                             <p class="card-text estate" style="background-color:orange;">phone: +254 {{$apartment->phone}}</p>
                            
                           
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="/apartments/show/{{$apartment->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                <a href="/apartments/{{$apartment->id}}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                               
                              </div>
                            
                            <small class="text-muted">{{$apartment->created_at->diffForHumans()}}</small>
                            </div>
                          </div>


                          @if(!Auth::guest())
                           @if(Auth::user()->id == $apartment->user_id)
                              <div class="card-footer">
                                {!!Form::open(['action'=> ['apartmentsController@destroy',$apartment->id],'method'=> 'POST','class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete image',['class'=>'btn btn-sm btn-outline-secondary'])}}
                                    {!!Form::close()!!}
                              </div>
                             
                              @endif
                         
                          @endif



                        </div>
                        
                        
                      </div>
                      @endforeach

                      @else
                        <p>no apartments found</p>
                      
                      @endif
                      
                  </div>
                 
           
           
          <a class="btn btn-primary" style="float:left" href="/home" role="button">Back
              &raquo;</a>
</div>





@endsection
