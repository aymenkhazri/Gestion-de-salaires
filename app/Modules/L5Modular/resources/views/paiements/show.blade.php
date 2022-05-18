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
                <a class="btn btn-info" href="{{ route('paiements.index') }}"> Return</a>
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

                <div class="row">
                    <div class="col-6">     
    <form action="{{ route('paiements.update',$employe->id) }}" method="POST" >
        @csrf
        @method('PUT')

        <div class="col-xs-6 col-sm-6 col-md-6 pull-center"  >
            <img src="{{asset('assets/images')}}/{{ $employe->avatar}}" width="90px;" height="90px;"  style=" border-radius:50%"/>
        </div>

     
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong> first name:</strong>
                    <input type="text" name="nom" value="{{ $employe->nom}}" class="form-control" placeholder="enter your first name">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong> Last name:</strong>
                    <input type="text" name="prenom"  value="{{ $employe->prenom}}" class="form-control" placeholder="enter your Last name">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong> Salaire Brut:</strong>
                    <input type="number" name="salaire_brut"   value="{{$paiement->salaire_brut}}" class="form-control" placeholder="enter your salaire brut">
                </div>
            </div>
           
            
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong> marital status:</strong>
                    <input type="text" name="statu_matrimoniel" value="{{$employe->statu_matrimoniel}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong> enfants:</strong>
                    <input type="text" name="enfants" value="{{ $employe->enfants}}" class="form-control">
                    
                </div>
            </div>


            <br>
            <br>    
            <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                <button type="submit" class="btn btn-primary">calculate</button>
            </div>
       
   
    </form>
</div>
    <div class="col-6">
   
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong> Salaire Brut:</strong>
                    <input type="text" name="salaire_brut" value="{{ $paiement->salaire_brut}}" class="form-control" placeholder="enter your first name">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong> Retenue CNSS:</strong>
                    <input type="text" name="retenue_cnss"  value="{{ $paiement->retenue_cnss}}" class="form-control" placeholder="enter your Last name">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong> Salaire Imposable:</strong>
                    <input type="text" name="salaire_imposable"  value="{{ $paiement->salaire_imposable}}" class="form-control" placeholder="enter your Last name">
                </div>
            </div>
           
            
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong> Contribution Sociale:</strong>
                    <input type="text" name="contribution_sociale" value="{{$paiement->contribution_sociale}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong> Retenue à la source:</strong>
                    <input type="text" name="retenue_la_source" value="{{ $paiement->retenue_la_source}}" class="form-control">
                    
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong> Net à apayer :</strong>
                    <input type="text" name="net_a_apayer" value="{{ $paiement->net_a_apayer}}" class="form-control">
                    
                </div>
            </div>


            <br>
            <br>    
            <div class="col-xs-4 col-sm-4 col-md-4 text-center">
            <button type="submit" class="btn btn-primary">calculate</button>
                
            </div>
       
   
    </form>
</div>
    </div>

@endsection