<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link  rel="icon" href="{{ asset('assets/img/fiduciaire.png') }}" type="image/x-icon">

    <title>Details de Impot</title>
</head>
<style>
    .text-center-100 {
    justify-content: center;
}

.text-center-200,
.text-center-300,
.text-center-400,
.text-center-500 {
    justify-content: center;

}


        .search-form {
            width: 490px;
            margin-left: 240px;
        }
        .card .btn-custom {
        background-color: #00FFFF;
        color: #000000;
    }
        
@media (max-width: 767px) {
            .search-form {
                margin-left: 10px;
                width: 100%;
                margin-top: 70px;
            }
        }

        @media (max-width: 500px) {
            .title {
                width: 100%;
                font-size: 15px;
            }
            .card .btn-custom{
                background-color:#00FFFF;
                font-size:49.5%;
                width:45%;
                color:#000000
            }
        
    }
    .container {
            margin: 20px auto;
            max-width: 98%;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: #fff;
        }
    
        .details-section {
            margin-bottom: 20px;
        }
    
        .details-section h4 {
            color: #333;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
    
        .details-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
    
        .details-list li {
            color: #666;
            line-height: 1.6;
            margin-bottom: 10px;
            display: block; /* Set display to block for vertical layout */
        }
</style>
<body>
    @extends('layouts.user_type.auth')

@section('content')
<div style="margin-top:-80px;" class="text-center-500">
    <form class="search-form" method="get" action="{{ route('impots.search') }}">
        <div  class="ms-md-3 pe-md-3 d-flex align-items-center">
            <div style="margin-right: 25px" class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input style="background-color: rgb(255, 255, 255) "  type="text" class="form-control" placeholder="Écrivez ici..." name="search"  value="{{ request('search') }}">
            </div>
        </div>
    </form>
</div>
<br/><br/>
<div>
    @if (Gate::allows('manage-all-impots'))
    <div style="background-color: rgb(4, 18, 102);" class="alert mx-4" role="alert">
        <span class="text-white">
            <strong>Ajoutez, modifiez et supprimez, vous pouvez utiliser toutes les fonctionnalités en tant que Super-Admin!</strong>
        </span>
    </div>
@elseif (Gate::allows('ajouter-impot'))
    <div style="background-color: rgb(4, 18, 102);" class="alert mx-4" role="alert">
        <span class="text-white">
            <strong> Vous pouvez simplement utiliser l'ajout en tant qu'Admin!</strong>
        </span>
    </div>
@elseif(Gate::allows('show-impot'))
    <div style="background-color: rgb(4, 18, 102);" class="alert mx-4" role="alert">
        <span class="text-white">
            <strong> Vous pouvez juste voir en tant que Gérant!</strong>
        </span>
    </div>
@elseif(Gate::allows('show-associe'))
    <div style="background-color: rgb(4, 18, 102);" class="alert mx-4" role="alert">
        <span class="text-white">
            <strong> Vous pouvez juste voir en tant qu'Associé!</strong>
        </span>
    </div>
@else
    <div style="background-color: rgb(4, 18, 102);" class="alert mx-4" role="alert">
        <span class="text-white">
            <strong> Vous pouvez juste voir !</strong>
        </span>
    </div>
@endif

<div class="container">
    <a href="{{route('impots.index')}}"><button type="submit" class="btn btn-primary" style=" background-color:#00FFFF;color:#000000">Retour</button></a>
        <div class="details-section">
            <h4> Information d'Impot:</h4>
            <ul class="details-list row">
                <div class="col-md-4"><li><strong>Login:</strong> {{$impot->login}}</li></div>
                <div class="col-md-4"><li><strong>Mot de passe:</strong> {{$impot->password}}</li></div>
                <div class="col-md-4"><li><strong>Code d'accé:</strong> {{$impot->code_acce}}</li></div>

                
                
            </ul>
        </div>
    
        <div class="details-section">
            <h4> Information de Societe:</h4>
            <ul class="details-list row">
                <li class="col-md-4"><strong>Societe Name:</strong> {{$impot->societe->name}}</li>
                <li class="col-md-4"><strong>Forme Juridique:</strong> {{$impot->societe->formes_juridique}}</li>
                <li class="col-md-4"><strong>Siege Social:</strong> {{$impot->societe->siege_social}}</li>
                <li class="col-md-4"><strong>Capital:</strong> {{$impot->societe->capital}}</li>
                <li class="col-md-4"><strong>Activite Principal:</strong> {{$impot->societe->activite_principal}}</li>
                <li class="col-md-4"><strong>RC:</strong> {{$impot->societe->rc}}</li>
                <li class="col-md-4"><strong>Patente:</strong> {{$impot->societe->patente}}</li>
                <li class="col-md-4"><strong>IF:</strong> {{$impot->societe->if}}</li>
                <li class="col-md-4"><strong>CNSS:</strong> {{$impot->societe->cnss}}</li>
                <li class="col-md-4"><strong>ICE:</strong> {{$impot->societe->ice}}</li>
                <li class="col-md-4"><strong>RIB:</strong> {{$impot->societe->rib}}</li>
                <li class="col-md-4"><strong>Date Exploitation:</strong> {{$impot->societe->date_exploitation}}</li>
                <li class="col-md-4"><strong>Date DbDexploitation:</strong> {{$impot->societe->date_debut_exploitation}}</li>
            </ul>
        </div>
    </div>


@endsection

</body>
</html>