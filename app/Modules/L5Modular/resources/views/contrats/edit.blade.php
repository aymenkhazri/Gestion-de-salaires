@extends('L5Modular::welcome')
   
@section('content')

<div class="container">
    <br>
    <br> 
    <div class="row">
        <div class="col-lg-12 margin-tb">
                <h2>Modify a Contract : </h2>
                <br> 
 
            <div class="pull-right" >
                <a class="btn btn-info" href="{{ route('contrats.index') }}"> Return</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your entry code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
                <br>
    <form action="{{ route('contrats.update',$contrat->id) }}" method="POST" >
        @csrf
        @method('PUT')
          
         <div class="">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contract type :</strong>
                    <input type="text" name="type_contrat" value="{{ $contrat->type_contrat}}" class="form-control" placeholder="enter your contract type">
                </div>
            </div>
            <br>
            <br>    
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
                <button type="Reset" class="btn btn-danger">Cancel</button>
            </div>
        </div>
   
    </form>
    </div>
    @endsection
