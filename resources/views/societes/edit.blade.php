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

    <title>Modifier une Société</title>
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
.container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            display: 
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
</style>
<body>
    
@extends('layouts.user_type.auth')

@section('content')
<div style="margin-top:-80px;" class="text-center-500">
    <form class="search-form" method="get" action="{{ route('associes.search') }}">
        <div  class="ms-md-3 pe-md-3 d-flex align-items-center">
            <div style="margin-right: 25px" class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input style="background-color: rgb(255, 255, 255) "  type="text" class="form-control" placeholder="Écrivez ici..." name="search"  value="{{ request('search') }}">
            </div>
        </div>
    </form>
</div><br/><br/>
<div class="card mb-4 mx-4">
    
    @if (Gate::allows('manage-all-gerants'))
    <div style="background-color: rgb(4, 18, 102);" class="alert mx-4" role="alert">
        <span class="text-white">
            <strong>Ajoutez, modifiez et supprimez, vous pouvez utiliser toutes les fonctionnalités en tant que Super-Admin!</strong>
        </span>
    </div>
@elseif (Gate::allows('ajouter-gerant'))
    <div style="background-color: rgb(4, 18, 102);" class="alert mx-4" role="alert">
        <span class="text-white">
            <strong> Vous pouvez simplement utiliser l'ajout en tant qu'Admin!</strong>
        </span>
    </div>
@elseif(Gate::allows('show-gerant'))
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

    <div class="card-header">
        <h5 class="mb-0">Modifier une Sociéte</h5>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('societes.update', $societe->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nom de Société </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $societe->name }}" required>
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label">    RC</label>
                <input type="number" class="form-control" id="cin" name="rc" value="{{ $societe->rc }}" required>
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label">    Patente</label>
                <input type="number" class="form-control" id="cin" name="patente" value="{{ $societe->patente }}" required>
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label">IF</label>
                <input type="number" class="form-control" id="if" name="if" value="{{ $societe->if }}" required>
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label">     CNSS</label>
                <input type="number" class="form-control" id="cnss" name="cnss" value="{{ $societe->cnss }}" required>
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label">    ICE</label>
                <input type="number" class="form-control" id="ice" name="ice" value="{{ $societe->ice }}" required>
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label">    RIB</label>
                <input type="number" class="form-control" id="rib" name="rib" value="{{ $societe->rib }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label"> Form Juridique</label>
                <input type="text" class="form-control" id="email" name="formes_juridique" value="{{ $societe->formes_juridique }}" required>
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label">  Siege Social</label>
                <input type="text" class="form-control" id="cin" name="siege_social" value="{{ $societe->siege_social }}" required>
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label">  Capital</label>
                <input type="text" class="form-control" id="cin" name="capital" value="{{ $societe->capital }}" required>
            </div>
           
            <div class="mb-3">
                <label for="cin" class="form-label">   Activite Principale</label>
                <input type="text" class="form-control" id="activite_principal" name="activite_principal" value="{{ $societe->activite_principal }}" required>
            </div>
           
            <div class="mb-3">
                <label for="cin" class="form-label">  Mode</label>
                <input type="date" class="form-control" id="cin" name="mode" value="{{ $societe->mode }}" required>
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label">  Date De Début D'exploitation Activité</label>
                <input type="date" class="form-control" id="cin" name="date_debut_exploitation" value="{{ $societe->date_debut_exploitation }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Modifiér</button>
        </form>
    </div>
</div>

@endsection

</body>
</html>