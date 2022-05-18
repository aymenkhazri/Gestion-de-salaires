@extends('L5Modular::welcome')
   
@section('content')




<br>
<div class="container">


    <div class="pull-center">
<h2>   Contract type management   </h2>
</div>
<hr>

<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
         
               
                <h3>Check all contract types : </h3>
           
            <br>
            <br>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contrats.create') }}"> Create a new Contract </a>
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
            <th style="text-align:center">  Contract type</th>
         
           
          
            <th width="350px" style="text-align:center">Action</th>
        </tr>
        @foreach ($contrats as $contrat)
        <tr>
            <td style="text-align:center">{{ ++$i }}</td>
            <td style="text-align:center">{{ $contrat->type_contrat}}</td>
         
           
            <td>
                <form action="{{ route('contrats.destroy',$contrat->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('contrats.show',$contrat->id) }}"><i class="far fa-eye"></i></a>
    
                    <a class="btn btn-warning" href="{{ route('contrats.edit',$contrat->id) }}"><i class="far fa-edit"></i></a>
                    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $contrats->links() !!}
    </div>
   


    @endsection
