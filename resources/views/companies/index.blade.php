@extends('layouts.app')
@section('content')
<a class="btn btn-primary" href="/home" role="button">Back
    &raquo;</a>
               
     <legend>Companies</legend>
                 
     <table class="table table-striped table-hover">
         <thead>
             <tr>
                 <th>Id ||</th>
                 <th>Name</th>
                 <th>phone</th>
                 <th>email</th>
             </tr>
         </thead>
         <tbody>
              @if(count($companies) > 0)
                 @foreach($companies->all() as $company)                  
                     <tr >
                         <th>{{$company->id}}  ||</th>
                         <td><a href ="/companies/{{$company->id}}">{{$company->name}}</a></td>
                         <td>{{$company->phone}}</td>
                         <td>{{$company->email}}</td>
                     </tr>
                 @endforeach
                    
             @else
               <p> no companies found</p>
             @endif 
                                    
         </tbody>
        
    </table>

                    {{$companies->links()}} 
              
   
@endsection
