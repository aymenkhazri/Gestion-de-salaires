@extends('L5Modular::welcome')
   
@section('content')
<br>



<div class="container">
<br>
<br>  
<div class="row">
    <div class="col-lg-12 margin-tb">
   
              
            <h2>Create a new Employe  </h2>
            
       
       
        <br>
        <div class="pull-right"  >
            <a class="btn btn-info" href="{{ route('employes.index') }}">Return</a>
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
<form action="{{ route('employes.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf
     <div class="">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Image:</strong>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> first name:</strong>
                <input type="text" name="nom" class="form-control" placeholder="enter your first name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Last name:</strong>
                <input type="text" name="prenom" class="form-control" placeholder="enter your Last name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="enter your email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Sexe:</strong>
                <select name="sexe" class="form-control">
                    <option disabled selected>select a choice</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Phone:</strong>
                <input type="number" name="telephone" class="form-control" placeholder="enter your phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Adress:</strong>
                <input type="text" name="adresse" class="form-control" placeholder="enter your adress">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Date of Birth:</strong>
                <input type="date" name="date_naissance" class="form-control" placeholder="enter your date of birth">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Contract type:</strong>
                <select name="type_contrat_id" class="form-control">
           
                    <option disabled selected >select a choice</option>  
                        @foreach($contrats as $contrat)
                        <option value="{{$contrat->type_contrat}}">{{$contrat->type_contrat}}</option>
                        @endforeach
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> CIN:</strong>
                <input type="text" name="cin" class="form-control" placeholder="enter your cin">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> CNSS:</strong>
                <input type="text" name="cnss" class="form-control" placeholder="enter your cnss">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> marital status:</strong>
                <select name="statu_matrimoniel" class="form-control">
                    <option disabled selected>select a choice</option>
                    <option value="célibataire">célibataire</option>
                    <option value="mariés">mariés</option>
                    <option value="divorcée">divorcée</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> enfants:</strong>
                <select name="enfants" class="form-control">
                    <option disabled selected>select a choice</option>
                    <option value="0">0</option>
                    <option value="0">1</option>
                    <option value="1">2</option>
                    <option value="3">3</option>
                    <option value="4 et plus">4 et plus</option>
                </select>
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

