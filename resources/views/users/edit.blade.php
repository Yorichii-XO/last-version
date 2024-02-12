<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link  rel="icon" href="{{ asset('assets/img/fiduciaire.png') }}" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <title>Modifiér</title>
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
        }
        .search-form {
            width: 490px;
            margin-left: 240px;
        }
        .card .btn-custom {
        background-color: #00FFFF;
        color: #000000;
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
/* Media query for smaller screens, adjust the max-width as needed */
@media (max-width: 767px) {
            .search-form {
                margin-left: 10px;
                width: 100%;
                margin-top: 70px;
            }
            
        }
       
        @media (max-width: 767px) {
            .link {
                display: flex!important;
                width: 100px;
            }
            
        }
      
</style>
<body>
    @extends('layouts.user_type.auth')

@section('content')




<div style="margin-top:-80px;" class="text-center-500">
    <form class="search-form" method="get" action="{{ route('users.search') }}">
        <div  class="ms-md-3 pe-md-3 d-flex align-items-center">
            <div style="margin-right: 25px" class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input style="background-color: rgb(255, 255, 255) "  type="text" class="form-control" placeholder="Écrivez ici..." name="search"  value="{{ request('search') }}">
            </div>
        </div>
    </form>
</div>
<br/><br/>
<div class="card mb-4 mx-4">
    <div class="card-header">
        <h5 class="mb-0">Edit User</h5>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password (Hashed)</label>
                <input type="text" class="form-control" id="password" name="password" value="{{ $user->password }}">
            </div>
            <div class="mb-3">
                <label for="unhashed_password" class="form-label">Unhashed Password</label>
                <input type="text" class="form-control" id="unhashed_password" name="unhashed_password" value="{{ $user->unhashed_password ?? '' }}">
            </div>
            
            
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role" required>

                    <option value="admin">Admin</option>
                    <option value="super-admin">Super Admin</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
</div>

@endsection

</body>
</html>