<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link  rel="icon" href="{{ asset('assets/img/fiduciaire.png') }}" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <title>Document</title>
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
    <!-- resources/views/societes/details.blade.php -->
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
</div>
<br/><br/>
    <div class="container mt-2">
        <h4 class="mb-4 text-center"><u>Les gerants pour la société {{ $societe->name }}</u></h4>

       
        <a href="{{route('societes.index')}}" class="mt-2"><button type="submit" class="btn btn-primary " style=" background-color:#00FFFF;color:#000000">Retour</button></a>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">tous Gerants</h5>
                <ul>
                    <div class="table-responsive p-0">
                        <table class="table table-striped align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        ID
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        Avatar
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        Societe
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        Nom Complet
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        N°cin
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        Role
                                    </th>
                                    
                                  
                                    
                                    @can('manage-all-gerants')
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        Action
                                    </th>
                                @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($gerants as $gerant)
                                <tr  style="cursor: pointer;">                                        <td class="ps-4">
                                            <div class="text-xs font-weight-bold copy-id" data-copy="{{ $gerant->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">

                                            <p class="text-xs font-weight-bold mb-0">{{ $gerant->id }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-sm me-3" style="background-color: #{{ substr(md5($gerant->name), 0, 6) }}; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 30px; height: 30px; margin-left:12px">
                                                <span style="color: white; font-size: 14px;">{{ strtoupper(substr($gerant->name, 0, 1)) }}</span>
                                            </div>
                                        </td>
                                        <td class="text-center ">
                                            @if ($gerant->societe)
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $gerant->societe->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">


                                                    {{ $gerant->societe->name }}</div>
                                            @else
                                                <p class="text-xs font-weight-bold mb-0">---</p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-name" data-copy="{{ $gerant->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">

                                            <p class="text-xs font-weight-bold mb-0">{{ $gerant->name }}</p>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-email" data-copy="{{ $gerant->email }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $gerant->email }}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            @if ($gerant->cin)
                                                <div class="text-xs font-weight-bold copy-cin" data-copy="{{ $gerant->cin }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                    {{ $gerant->cin }}
                                                </div>
                                            @else
                                                <p class="text-xs font-weight-bold mb-0">---</p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-role" data-copy="{{ $gerant->role }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $gerant->role }}
                                            </div>
                                        </td>
                                       
                                      
                                        <td class="text-center ">
                                            <div class="d-flex text-xs font-weight-bold">
                                                @can('manage-all-gerants')
                                                <a href="{{ route('gerants.edit', $gerant->id) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit gerant">
                                                    <i  class="fas fa-user-edit " style="color: #0eda8f"></i>
                                                </a>
                                                <form id="deleteForm_{{ $gerant->id }}" action="{{ route('gerants.destroy', $gerant->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" onclick="showConfirmation('deleteForm_{{ $gerant->id }}')" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                                                        <i style="color: red" class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                                <a href="{{ route('gerants.show',$gerant->id    )}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Details société">
                                                    <i class="fas fa-info-circle text-info"></i>
                                                </a>
                                            @endcan

                                           
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </ul>
            </div>
        </div>
        <div class="link d-flex justify-content-end mt-3">
            {{ $gerants->links() }}
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
    <script>
        // Function to show SweetAlert confirmation
        function showConfirmation(formId) {
            Swal.fire({
                title: 'Supprimer un Gerant?',
                text: 'Le cas échéant, cet utilisateur sera supprimé!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Supprimer!',
                cancelButtonText: 'Annuler',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('supprimer', 'Le Gerant a été Supprimer', 'success');
                    document.getElementById(formId).submit();
                } else {
                    // If user clicks "Annuler", do nothing or show a message
                    Swal.fire('Annulé', 'La suppression a été annulée', 'error');
                }
            });
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var copyElements = document.querySelectorAll('.copy-email, .copy-cin, .copy-role , .copy-name, .copy-id,.copy-societe');
    
            copyElements.forEach(function (copyElement) {
                var originalTitle = 'Click to copy';
                copyElement.setAttribute('title', originalTitle);
    
                copyElement.addEventListener('click', function () {
                    // Copy the text to the clipboard (You can use your own copy logic here)
                    var textToCopy = copyElement.getAttribute('data-copy');
                    copyTextToClipboard(textToCopy);
    
                    // Update the title attribute and show the "Copied!" message
                    copyElement.setAttribute('title', 'Copied!');
    
                    // Hide the "Copied!" title after a delay
                    setTimeout(function () {
                        copyElement.setAttribute('title', originalTitle); // Restore the original title
                    }, 2000); // Adjust the delay as needed
                });
            });
    
            function copyTextToClipboard(text) {
                var textArea = document.createElement('textarea');
                textArea.value = text;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
            }
        });
    </script>
    
@endsection

</body>
</html>