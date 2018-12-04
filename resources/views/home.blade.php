@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="jumbotron">
                            <div class="container">
                               
                                    <h1>Welcome to SakaHouse Online Platform</h1>
                                        <p>SakaHouse gives you an online platform to share your vaccant Rental Apartments with your Clients. Get connected with your clients right away. Lets get started.</p>
                                       

                                        <div class="btn-group">
                                                <a href="/apartments"><button type="button" class="btn btn-lg btn-outline-primary">view apartments</button></a>
                                                <a href=""><button type="button" class="btn btn-lg btn-outline-secondary active">By a House</button></a>
                                              </div>
                             
                             
                            </div>
                          </div>
                </div>
               
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                  <a href="/apartments" class="btn btn-danger">view Apartments</a>
                 
                  <a href="/apartments/create" class="btn btn-success">create apartment</a>
                  
              <hr>
              <br><br><br><br>
                  
                </div>
                @if(count($apartments)>0)
                    <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                My Apartments 
                                </a>
                            @foreach($apartments as $apartment)
                            <a href="#" class="list-group-item list-group-item-action">{{$apartment->name}}</a>
                            
                            @endforeach
                    
                    
                    </div>
                    @else
                    <p class="list-group-item list-group-item-action active">
                           You have no apartment(s)
                    </p>

                @endif
        </div><!--/.sidebar-offcanvas-->
    </div>

@endsection
