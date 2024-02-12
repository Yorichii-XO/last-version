<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Add this to your head section -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link  rel="icon" href="{{ asset('assets/img/fiduciaire.png') }}" type="image/x-icon">

    <title>Regus</title>
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

/* Media query for smaller screens, adjust the max-width as needed */
@media (max-width: 767px) {
            .search-form {
                margin-left: 10px;
                width: 100%;
                margin-top: 70px;
            }
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
<script>
    // Display toastr messages if they exist in the session
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
</script>
<div>
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

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tous regus</h5>
                        </div>
                        @can('manage-all-gerants')

                        <a class="btn btn-sm mb-0 btn-custom" href="{{ route('regus.create') }}"  type="button">+&nbsp;  Ajouter</a>
                    @endcan
                    </div>

                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table table-striped align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2" style="color: #000000;">
                                        ID
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2" style="color: #000000;">
                                        Avatar
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2" style="color: #000000;">
                                        Societe
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2" style="color: #000000;" opacity-7">
                                        Login
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2" style="color: #000000;">
                                        Mot de passe
                                    </th>
                                   
                                   
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2" style="color: #000000;">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reguses as $regus)
                                    <tr>
                                        <td class="ps-4">
                                            <p class="text-xs font-weight-bold copy" 
                                            data-copy="{{ $regus->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" 
                                                style="cursor: pointer;">{{ $regus->id }}</p>
                                        </td>
                                        <td   class="text-center">
                                            <div  class="avatar avatar-sm me-3 mr-6" style="background-color: #{{ substr(md5($regus->login), 0, 6) }}; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 30px; height: 30px;margin-left:18px">
                                                <span style="color: white; font-size: 14px">{{ strtoupper(substr($regus->login, 0, 1)) }}</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            @if ($regus->societe)
                                                <p class="text-xs font-weight-bold mb-0 copy-cin">{{ $regus->societe->name }}</p>
                                            @else
                                                <p class="text-xs font-weight-bold mb-0">---</p>
                                            @endif
                                        </td>
                                        <td class="text-center copy">
                                            <p class="text-xs font-weight-bold copy" data-copy="{{ $regus->login }}" 
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" 
                                                style="cursor: pointer;">{{ $regus->login }}</p>
                                        </td>
                                        <td class="text-center copy">
                                            <p class="text-xs font-weight-bold copy" data-copy="{{ $regus->password }}" 
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" 
                                                style="cursor: pointer;">{{ $regus->password }}</p>
                                        </td>
                                        
                                      
                                        <td class="text-center">
                                            <div class="d-flex font-weight-bold">
                                                @can('manage-all-gerants')
                                                    <a style="color:#1cd09d" href="{{ route('regus.edit', $regus->id) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Regus">
                                                        <i  class="fas fa-user-edit " style="color: #0eda8f"></i>
                                                    </a>
                                                    <form id="deleteForm_{{ $regus->id }}" data-bs-toggle="tooltip" data-bs-original-title="destroy regus" action="{{ route('regus.destroy', $regus->id) }}" method="post" style="display: inline-block;" onsubmit="return false;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="showConfirmation('deleteForm_{{ $regus->id }}')" type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                                                            <i style="color: red"  class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                    
                                                @endcan
                                                <a href="{{ route('regus.show',$regus->id)}}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Details société">
                                                    <i class="fas fa-info-circle text-info"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-right: 530PX;color:#000000" class="link d-flex justify-content-end mt-3">
        {{ $reguses->links() }}
    </div>
</div>
<script>
    // Function to show SweetAlert confirmation
    function showConfirmation(formId) {
        Swal.fire({
            title: 'Supprimer un Regus?',
            text: 'Le cas échéant, cet regus sera supprimé!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Supprimer!',
            cancelButtonText: 'Annuler',
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire('supprimer', 'Le regus a été Supprimer', 'success');
                document.getElementById(formId).submit();
            } else {
                // If user clicks "Annuler", do nothing or show a message
                Swal.fire('Annulé', 'La suppression a été annulée', 'error');
            }
        });
    }
</script>
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
    document.addEventListener('DOMContentLoaded', function () {
        var copyElements = document.querySelectorAll('.copy');

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