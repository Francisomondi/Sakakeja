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
                              <h1>Hello, world!</h1>
                              <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                              <p><a class="btn btn-primary btn-lg" href="/companies/create" role="button">Create Company &raquo;</a></p>
                            </div>
                          </div>
                </div>
               
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                <a href="" class="btn btn-primary ">Add House</a>
                  <a href="#" class="btn btn-danger">view my Houses</a>
                  <a href="/companies" class="btn btn-success">view companies</a>
              
                  
                </div>
              </div><!--/.sidebar-offcanvas-->
    </div>

@endsection
