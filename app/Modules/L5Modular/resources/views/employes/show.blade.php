@extends('L5Modular::welcome')
   
@section('content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
              
                <h2>See Employé : </h2>
            
            <div class="pull-right" >
                <a class="btn btn-info" href="{{ route('employes.index') }}"> Return</a>
            </div>
        </div>
    </div>
    <br>
    <br> 
    <br>
   <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Picture :</strong>
                <img src="{{asset('assets/images')}}/{{ $employe->avatar}}" width="70px;" height="60px;"  style=" border-radius:50%"/>
               
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First name :</strong>
                {{ $employe->nom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last name :</strong>
                {{ $employe->prenom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                {{ $employe->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sexe :</strong>
                {{ $employe->sexe }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone :</strong>
                {{ $employe->telephone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Adress :</strong>
                {{ $employe->adresse }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of birth:</strong>
                {{ $employe->date_naissance }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CIN:</strong>
                {{ $employe->cin }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CNSS :</strong>
                {{ $employe->cnss }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contract type :</strong>
                {{ $employe->type_contrat_id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marital status :</strong>
                {{ $employe->statu_matrimoniel }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Number of children :</strong>
                {{ $employe->enfants }}
            </div>
        </div>

       
    </div>

    </div>

@endsection