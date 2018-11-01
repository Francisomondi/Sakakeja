@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="jumbotron">
        <h1>SAKA KEJA APPLICATION</h1>
        <p class="lead">The best easy way to search for rental apartments around you. check out!!</p>
        <a class="btn btn-lg btn-primary" href="{{url('/estates')}}" role="button">Estates</a>
        <a class="btn btn-lg btn-primary" href="{{url('/companies')}}" role="button">Company</a>
      </div>
    </main>
    </div>
</div>

@include('layouts.footer')
@endsection

