@extends('layouts.app')
@section('content')
                  <p><a class="btn btn-primary" href="/companies" role="button">Back
                      &raquo;</a></p>
                      <hr>
                <div class="row row-offcanvas row-offcanvas-right">

                  <div class="col-xs-12 col-sm-9">
                    <p class="pull-right visible-xs">
                      
                    </p>
                    <div class="jumbotron">
                      <h1>{{$companies->name}}</h1>
                      <p>{{$companies->description}}</p>
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
                    <a href="/companies/{{ $companies->id }}/edit" class="btn btn-primary ">Edit company</a>

                      <a href="#"
                      onClick="
                       var result= confirm('are you sure you want to delete this project?');
                       if(result){
                         event.preventDefault();
                         document.getElementById('delete-form').submit();
                       }" class="btn btn-danger">Delete company</a>
                      
                      <a href="#" class="btn btn-success">Add Houses</a>
                  
                      
                    </div>
                  </div><!--/.sidebar-offcanvas-->
                </div><!--/row-->

              


@endsection
