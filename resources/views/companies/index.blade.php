@extends('layouts.app')
@section('content')
                <div class="panel panel-danger">
                    <div class="panel-heading">Companies</div>

                    <div class="panel-body">

                            @if(count($companies) > 0)

                            @foreach($companies->all() as $company)
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">phone</th>
                                        <th scope="col">email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <tr class="table-active">
                                    <th scope="col">{{$company->id}}</th>
                                    <td><a href ="/companies/{{$company->id}}">{{$company->name}}</a></td>
                                        <td>{{$company->phone}}</td>
                                        <td>{{$company->email}}</td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            @endforeach
                        @else
                        <p> no companies found</p>
                            @endif 
        
                            <a class="btn btn-lg btn-info" href="{{url('/home')}}" role="button">Back</a>

                    </div>



                </div>
                    
                  
@endsection
