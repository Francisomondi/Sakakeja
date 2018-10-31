@include('includes.header')
<div class="container">
            <h1>Companies</h1>
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
                    <td>{{$company->name}}</td>
                    <td>{{$company->phone}}</td>
                    <td>{{$company->email}}</td>
                </tr>
                
                </tbody>
            </table>
        @endforeach
    @else
    <p> no companies found</p>
        @endif 
</div>
 
@include('includes.footer')

