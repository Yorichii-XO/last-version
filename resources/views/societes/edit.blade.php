<!-- resources/views/associes/edit.blade.php -->

@extends('layouts.user_type.auth')

@section('content')

<div class="card mb-4 mx-4">
    <div style="background-color: rgb(4, 18, 102)" class="alert  mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete you can use all functional!</strong>
        </span>
    </div>

    <div class="card-header">
        <h5 class="mb-0">Edit Sociéte</h5>
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
                <label for="cin" class="form-label">  Date D'exploitation</label>
                <input type="date" class="form-control" id="cin" name="date_exploitation" value="{{ $societe->date_exploitation }}" required>
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label">  Date De Début D'exploitation Activité</label>
                <input type="date" class="form-control" id="cin" name="date_debut_exploitation" value="{{ $societe->date_debut_exploitation }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Société</button>
        </form>
    </div>
</div>

@endsection
