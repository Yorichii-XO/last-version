<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="icon" href="{{ asset('assets/img/fiduciaire.png') }}" type="image/x-icon">

    <title>Modifiér un Gérant</title>
</head>
<style>
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
    <!-- resources/views/associes/edit.blade.php -->

@extends('layouts.user_type.auth')

@section('content')
<div style="margin-top:-80px;" class="text-center-500">
    <form class="search-form" method="get" action="{{ route('gerants.search') }}">
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
            <strong> Vous pouvez juste voir en tant qu'gerant!</strong>
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
        <h5 class="mb-0">Modifiér un Gérant</h5>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('gerants.update', $gerant->id) }}">
            @csrf
            @method('PUT') 

            <div class="mb-3">
                <label for="name" class="form-label">Nom complet</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $gerant->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $gerant->email }}" required>
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label">N°cin</label>
                <input type="cin" class="form-control" id="cin" name="cin" value="{{ $gerant->cin }}" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="gerant" {{ $gerant->role === 'gerant' ? 'selected' : '' }}>Gerant</option>
                </select>
            </div>

            
            <div class="mb-3">
                <label for="societe" class="form-label">Societe</label>
                <select class="form-select" id="societe_id" name="societe_id" required>
                    @foreach($societes as $societe)
                        <option value="{{ $societe->id }}" {{ $gerant->societe_id == $societe->id ? 'selected' : '' }}>
                            {{ $societe->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Modifiér</button>
        </form>
    </div>
</div>

@endsection

</body>
</html>