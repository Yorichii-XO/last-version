
@extends('layouts.user_type.auth')

@section('content')

<div class="card mb-4 mx-4">
    <div style="background-color: rgb(4, 18, 102)" class="alert  mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete you can use all functional!</strong> 
        </span>
    </div>

    <div class="card-header">
        <h5 class="mb-0">Ajouter Société </h5>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('societes.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"> nom de Société</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label"> Form Juridique</label>
                <input type="text" class="form-control" id="formes_juridique" name="formes_juridique" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"> Siege Social</label>
                <input type="text" class="form-control" id="cin" name="siege_social" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">   Capital</label>
                <input type="text" class="form-control" id="cin" name="capital" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">  Activite Principale</label>
                <input type="text" class="form-control" id="activite_principal" name="activite_principal" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"> RC</label>
                <input type="number" class="form-control" id="rc" name="rc" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"> Patente</label>
                <input type="number" class="form-control" id="patente" name="patente" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"> IF</label>
                <input type="number" class="form-control" id="if" name="if" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"> CNSS</label>
                <input type="number" class="form-control" id="cnss" name="cnss" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"> ICE</label>
                <input type="number" class="form-control" id="ice" name="ice" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"> RIB</label>
                <input type="text" class="form-control" id="rib" name="rib" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Date D'exploitation</label>
                <input type="date" class="form-control" id="date_exploitation" name="date_exploitation" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date De Début D'exploitation Activité
                </label>
                <input type="date" class="form-control" id="date_debut_exploitation" name="date_debut_exploitation" required>
            </div>
            

            <button type="submit" class="btn btn-primary">Ajouter une Société</button>
        </form>
    </div>
</div>

@endsection