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
                           
                                    <h1>Looking For Vaccant Rentals or homes to buy Around You??</h1>
                                    
                                    
                                    <p class="welcome">SakaHouse offers a platform to  help you find rental houses and Homes to buy  at the best price from a location of your
                                        choice with just a click of a button.</p>
                                    <hr style="background-color:antiquewhite">


                                    <div class="list-group">
                                                <a href="/apartments"><button type="button" class="btn btn-lg btn-outline-primary">view Apartments/Offices &raquo;</button></a>
                                            
                                                <a href="/properties"><button type="button" class="btn btn-lg btn-outline-secondary active">Buy a House &raquo;</button></a>
                                            
                                        <hr>
                                        <br>
                                            
                                    </div>
                            
                   </div>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection
