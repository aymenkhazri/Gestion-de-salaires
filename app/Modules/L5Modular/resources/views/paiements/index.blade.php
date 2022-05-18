@extends('L5Modular::welcome')
   
@section('content')




<br>
<div class="container">


    <div class="pull-center">
<h2>   Salary payment   </h2>
</div>
<hr>

<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
         
               
                <h3>Check all Employés : </h3>
           
            <br>
            <br>
           
        </div>
    </div>
   <br>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>
  
   
    <table class="table table-bordered"  >
        <tr class="thead-dark">
            <th style="text-align:center">N</th>
            <th style="text-align:center">  Picture</th>
            <th style="text-align:center">  first name </th>
            <th style="text-align:center">  last name</th>
            <th style="text-align:center">  Contract type</th>
         
           
          
            <th width="170px" style="text-align:center">Action</th>
        </tr>
        @foreach ($employes as $employe)
        <tr>
            <td style="text-align:center">{{ ++$i }}</td>
            <td style="text-align:center"><img src="{{asset('assets/images')}}/{{ $employe->avatar}}" width="70px;" height="60px;"  style=" border-radius:50%"/></td>
          
            <td style="text-align:center">{{ $employe->nom}}</td>
            <td style="text-align:center">{{ $employe->prenom}}</td>
            <td style="text-align:center">{{ $employe->type_contrat_id}}</td>
         
           
            <td>
                <a class="btn btn-primary" href="{{ route('paiements.edit',$employe->id) }}">Payment</a>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $employes->links() !!}
    </div>
   


    @endsection
