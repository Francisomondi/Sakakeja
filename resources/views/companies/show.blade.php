@include('layouts.app')
<div class="container">
        <a class="btn btn-lg btn-default" href="{{url('/companies')}}" role="button">Back</a>
        <div class="jumbotron">
            <h1>{{$companies->name}}</h1>
            <p class="lead">{{$companies->decription}}</p>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
        </div>

        <!-- Example row of columns -->
        <div class="row">
            @if(count($companies->estates)>0)

            @foreach($companies->estates as $estate)
                    <div class="col-lg-3">
                    <h2>{{$estate->name}}</h2>
                    <p>{{$estate->location}}</p>
                    <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
                    </div>
           @endforeach 
           @else
           <h2>no estates found</h2>
           @endif
        </div>

</div>
@include('layouts.footer')