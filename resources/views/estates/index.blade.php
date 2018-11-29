@extends('layouts.app')
@section('content')
<a class="btn btn-primary" href="/home" role="button">Back
    &raquo;</a>
               
     <legend>estates</legend>
                 
     <table class="table table-striped table-hover" id="company-table">
         <thead>
             <tr>
                 <th>Id ||</th>
                 <th>Name</th>
                 <th>Location</th>
                 <th>owner</th>
             </tr>
         </thead>
         <tbody>
              @if(count($estates) > 0)
                 @foreach($estates->all() as $estate)                  
                     <tr >
                         <th>{{$estate->id}}  ||</th>
                         <td><a href ="/estates/{{$estate->id}}">{{$estate->name}}</a></td>
                         <td>{{$estate->location}}</td>
                         
                         <td>{{$estate->user->name}}</td>
                     </tr>
                 @endforeach
                    
             @else
               <p> no estates found</p>
             @endif 
                                    
         </tbody>
        
    </table>

                    {{$estates->links()}} 
              
   
@endsection
