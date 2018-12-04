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
                              <h1>Looking For Vaccant Rentals Around You??</h1>
                              <p class="welcome">Saka keja offers a platform to find a rental house of your choice from a location of your
                                   choice with just a click of a button ,Its absolutely free!!</button></p>
                             <hr style="background-color:antiquewhite">


                              <div class="btn-group">
                                    <a href="/apartments"><button type="button" class="btn btn-lg btn-outline-primary">view Apartments &raquo;</button></a>
                                    <a href=""><button type="button" class="btn btn-lg btn-outline-secondary active">By a House &raquo;</button></a>
                                  </div>
                            </div>
                          </div>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection
