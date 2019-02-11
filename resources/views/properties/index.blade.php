@extends('layouts.app')
@section('content')
<main role="main">

    <div class="album py-5 bg-light">
        <div class="container">
          
        <div class="row" >
                @if(count($properties)>0)

                @foreach($properties as $property)
            
                <div class="col-md-4">
                    <div class="card mb-3 shadow-sm" >
                        <h3 style="text-align:center;">{{$property->name}}</h3>
                        
                        <a href="/properties/{{$property->id}}">
                        <img src="/storage/photos/property/{{$property->image}}" alt="leather seat" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"  rect fill="#55595c" width="100%" height="100%"/>
                        </a>
                          <div class="card-body">
                                <p class="card-text">{{$property->description}}</p>
                                <p class="card-text" >KES: {{$property->price}}</p>
                              
                                <div class="d-flex justify-content-between align-items-center">
                                      <div class="btn-group">
                                          <a href="/properties/{{$property->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                          <a href="/properties/{{$property->id}}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                                      
                                      </div>
                                    
                                    <small class="text-muted">{{$property->created_at->diffForHumans()}}</small>
                                    <small class="text-muted">{{$property->condition}}</small>
                                </div>
                          </div>

                    </div>
                      
        </div>
              @endforeach
              

              @else
                <p>No properties found</p>
              
              @endif      
              
          </div>
          
              {{$properties->links()}}
              <a class="btn btn-sm btn-outline-secondary" style="float:left" href="/" role="button">Back
                &raquo;</a>
          </div>
         
         
   
   

</div>

    
  
   
  
  
     
  
  
    <!-- FOOTER -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script></body>
  </html>
  
@endsection