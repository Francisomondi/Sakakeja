@extends('layouts.app')
@section('content')
                  <p><a class="btn btn-primary" href="/companies" role="button">Back
                      &raquo;</a></p>
                      <hr>
                <div class="row row-offcanvas row-offcanvas-right">

                  <div class="col-xs-12 col-sm-9">
                    <p class="pull-right visible-xs">
                      
                    </p>
                    <div class="well well-lg">
                      <h1>{{$companies->name}}</h1>
                   
                      <p>{{$companies->description}}</p>
                      <small>created by {{$companies->user->name}}</small>
                    </div>
                    
                    <hr>
                  <div class="row">
                        @if(count($companies->estates)>0)
                            @foreach($companies->estates as $estate)
                                <div class="col-xs-6 col-lg-4">
                                  <h2>{{$estate->name}}</h2>
                                  <p>{{$estate->location}} </p>
                                  <p><a class="btn btn-primary" href="#" role="button">view apartments
                                  &raquo;</a></p>
                                </div><!--/.col-xs-6.col-lg-4-->
                          @endforeach 
                    @else
                    <h2>no estates found</h2>
                    @endif
                    </div><!--/row-->
                  </div><!--/.col-xs-12.col-sm-9-->

                  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                    <div class="list-group">
                      @if(!Auth::guest())
                            @if(Auth::user()->id == $companies->user_id)
                            
                                  <a href="/companies/{{ $companies->id }}/edit" class="btn btn-primary ">Edit company</a>
                                  <a href="/estates/create/{{$companies->id}}" class="btn btn-success">Add Estate</a>
                                  <a href="/apartments/create/{{$companies->id}}" class="btn btn-success">Add Apartment</a>
                                  

                                  {!!Form::open(['action'=> ['companiesController@destroy',$companies->id],'method'=> 'POST','class'=>'pull-right'])!!}
                                  {{Form::hidden('_method','DELETE')}}
                                  {{Form::submit('Delete company',['class'=>'btn btn-danger'])}}
                                  {!!Form::close()!!}
                                  @endif
                            @endif  
                    </div>
                  </div><!--/.sidebar-offcanvas-->
                </div><!--/row-->

              


@endsection
 