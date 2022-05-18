@extends('L5Modular::welcome')
   
@section('content')




<br>
<div class="container">


    <div class="pull-center">
<h2>   Employés management   </h2>
</div>
<hr>

<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
         
               
                <h3>Check all Employés : </h3>
           
            <br>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employes.create') }}"> Create a new Employé </a>
            </div>
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
         
           
          
            <th width="350px" style="text-align:center">Action</th>
        </tr>
        @foreach ($employes as $employe)
        <tr>
            <td style="text-align:center">{{ ++$i }}</td>
            <td style="text-align:center"><img src="{{asset('assets/images')}}/{{ $employe->avatar}}" width="70px;" height="60px;"  style=" border-radius:50%"/></td>
          
            <td style="text-align:center">{{ $employe->nom}}</td>
            <td style="text-align:center">{{ $employe->prenom}}</td>
            <td style="text-align:center">{{ $employe->type_contrat_id}}</td>
         
           
            <td>
                <form action="{{ route('employes.destroy',$employe->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('employes.show',$employe->id) }}"><i class="far fa-eye"></i></a>
    
                    <a class="btn btn-warning" href="{{ route('employes.edit',$employe->id) }}"><i class="far fa-edit"></i></a>
                    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $employes->links() !!}
    </div>
   


    @endsection
