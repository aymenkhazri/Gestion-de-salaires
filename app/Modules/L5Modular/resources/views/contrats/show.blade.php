@extends('L5Modular::welcome')
   
@section('content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
              
                <h2>See type Contract : </h2>
            
            <div class="pull-right" >
                <a class="btn btn-info" href="{{ route('contrats.index') }}"> Return</a>
            </div>
        </div>
    </div>
    <br>
    <br> 
    <br>
   <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contract type :</strong>
                {{ $contrat->type_contrat }}
            </div>
        </div>

    </div>

    </div>

@endsection