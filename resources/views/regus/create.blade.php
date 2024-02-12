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

    <title>Créer un Regus</title>
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
    <form class="search-form" method="get" action="{{ route('regus.search') }}">
        <div  class="ms-md-3 pe-md-3 d-flex align-items-center">
            <div style="margin-right: 25px" class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input style="background-color: rgb(255, 255, 255) "  type="text" class="form-control" placeholder="Écrivez ici..." name="search"  value="{{ request('search') }}">
            </div>
        </div>
    </form>
</div><br/><br/>
<div class="card mb-4 mx-4">
    <div style="background-color: rgb(4, 18, 102)" class="alert  mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete you can use all functional!</strong> 
        </span>
    </div>

    <div class="card-header">
        <h5 class="mb-0">Ajouter un Regu</h5>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('regus.store') }}">
            @csrf
           
            <div class="mb-3">
                <label for="email" class="form-label">Login</label>
                <input type="text" class="form-control" id="email" name="login" required>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="mb-3">
            <label for="societe" class="form-label">Societe</label>
            <select class="form-select" id="societe" name="societe" required>
            <option value="">Sélectionner une société</option>

            @foreach($societes as $societe)

                <option value="{{$societe->name}}">{{$societe->name}}</option>
                @endforeach
            </select>
        </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</div>
<script>
    // Add this script to handle sidebar toggling
    $(document).ready(function () {
        $('#iconNavbarSidenav').on('click', function () {
            $('body').toggleClass('g-sidenav-pinned');
            $('body').toggleClass('g-sidenav-hidden');
        });
    });
</script>
@endsection
</body>
</html>