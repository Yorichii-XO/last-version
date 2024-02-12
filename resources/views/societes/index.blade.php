<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Add this to your head section -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link  rel="icon" href="{{ asset('assets/img/fiduciaire.png') }}" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Sociétés</title>
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
@include('sweetalert::alert')

<div style="margin-top:-80px;" class="text-center-500">
    <form class="search-form" method="get" action="{{ route('societes.search') }}">
        <div  class="ms-md-3 pe-md-3 d-flex align-items-center">
            <div style="margin-right: 25px" class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input style="background-color: rgb(255, 255, 255) "  type="text" class="form-control" placeholder="Écrivez ici..." name="search"  value="{{ request('search') }}">
            </div>
        </div>
    </form>
</div>

<br/><br/>
<script>
    // Display toastr messages if they exist in the session
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
</script>
<div>
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
                            <h5 class="title mb-0">Tous sociétés</h5>
                        </div>
                        @can('ajouter-gerant')
                        <a class="btn btn-sm mb-0 btn-custom" href="{{ route('societes.create') }}"  >+&nbsp; Ajouter</a>
                    @endcan   
                    </div>
                </div>
               
                <div class="card-body px-0 pt-0 pb-2">
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
                                        Nom de Société 
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        RC
                                      </th>
                                      <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                         Patente
                                      </th>
                                      <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                         IF
                                      </th>
                                      <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                          CNSS
                                       </th>
                                       <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                          ICE
                                       </th>
                                       <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                           RIB
                                        </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                      Form Juridique
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        Siege Social
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                     Capital
                                    </th>
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        Activite Principale
                                    </th>
                                   
                                      <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                       Mode
                                     </th>
                                     <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                         Date De Début D'exploitation Activité
                                      </th>
                                      <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        gerants
                                     </th>
                                     <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2" style="color: #000000;">
                                        Associés
                                    </th>
                                   
                                    <th class="text-center text-uppercase text-dark text-xs font-weight-bolder ps-2 " style=" color: #000000;">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($societes as $societe)
                                <tr  style="cursor: pointer;">                                        <td class="ps-4">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->id }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-sm me-3" style="background-color: #{{ substr(md5($societe->name), 0, 6) }}; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 30px; height: 30px;">
                                                <span style="color: white; font-size: 14px;">{{ strtoupper(substr($societe->name, 0, 1)) }}</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->name }}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->rc }}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->patent }}
                                            </div>
                                        </td>  
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->if }}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->cnss }}
                                            </div>
                                        </td>  <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->ice }}
                                            </div>
                                        </td>  <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->name }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->rib }}
                                            </div>
                                        </td>  
                                        
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->formes_juridique }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->formes_juridique }}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->siege_social }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->siege_social }}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->capital }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->capital }}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->activite_principal }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->activite_principal }}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe"  data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                               
                                                    @include('societes.mode', ['mode' => $societe->mode])
                                             
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="text-xs font-weight-bold copy-societe" data-copy="{{ $societe->date_debut_exploitation }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                {{ $societe->date_debut_exploitation }}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('societes.details1', ['societe_id' => $societe->id]) }}">
                                                <div class="text-xs font-weight-bold" data-copy="{{ $societe->gerants_count }}" data-societe-id="{{ $societe->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                    {{ $societe->gerants_count }}
                                                </div>
                                            </a>
                                        </td> 
                                        <td class="text-center">
                                            <a href="{{ route('associes.details', ['societe_id' => $societe->id]) }}">
                                                <div class="text-xs font-weight-bold" data-copy="{{ $societe->associes_count }}" data-societe-id="{{ $societe->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to copy" style="cursor: pointer;">
                                                    {{ $societe->associes_count }}
                                                </div>
                                            </a>
                                        </td>
                                       
                                        <td class="text-center ">
                                            <div class="d-flex  font-weight-bold">
                                            @can('manage-all-gerants')
                                                <a href="{{ route('societes.edit', $societe->id) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit societe">
                                                    <i  class="fas fa-user-edit " style="color: #0eda8f"></i>
                                                </a>
                                                
                                                <form id="deleteForm_{{ $societe->id }}"  action="{{ route('societes.destroy', $societe->id) }}" method="post" onsubmit="return false;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" onclick="showConfirmation('deleteForm_{{ $societe->id }}')" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                                                        <i style="color: red" class="fas fa-trash-alt"></i>
                                                    </button>
                                                    
                                                </form>
                                               
                                            @endcan
                                            <a href="{{ route('societes.show',$societe->id) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Details societe">
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
        {{ $societes->links() }}
    </div>
</div>
<!-- Example in societes.index.blade.php -->
<!-- Example in societes.index.blade.php -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var copyElements = document.querySelectorAll('.copy-societe');

        copyElements.forEach(function (copyElement) {
            copyElement.addEventListener('click', function () {
                var societeId = copyElement.getAttribute('data-societe-id');

                // Use Ajax to fetch gerant information based on societeId
                fetchGerantInformation(societeId, copyElement);
            });
        });

        function fetchGerantInformation(societeId, copyElement) {
            // Use Ajax to fetch gerant information based on societeId
            // Adjust this part based on your actual routes and endpoints
            fetch(`/societes/${societeId}/gerants`)
                .then(response => response.json())
                .then(data => {
                    // Display gerant information as needed
                    showGerantInformation(data, copyElement);
                })
                .catch(error => {
                    console.error('Error fetching gerant information:', error);
                });
        }

        function showGerantInformation(gerantData, copyElement) {
            // Example: Display gerant information in a tooltip
            var tooltip = new bootstrap.Tooltip(copyElement, {
                title: getGerantInfoHtml(gerantData),
                placement: 'top',
                html: true
            });
        }

        function getGerantInfoHtml(gerantData) {
            // Customize this part based on the structure of your gerant data
            // This is just a simple example, you may need to adjust it
            var html = '<div>';
            html += '<strong>Gerant Information</strong><br>';
            html += 'Name: ' + gerantData.name + '<br>';
            html += 'Email: ' + gerantData.email + '<br>';
            // Add more fields as needed
            html += '</div>';
            return html;
        }
    });
</script>
<!-- Add the following to your script section -->
<script>
   
    @if(Session::has('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: "{{ Session::get('error') }}",
        });
    @endif

    // Function to show confirmation before form submission
    function showConfirmation(formId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user confirms, submit the form
                document.getElementById(formId).submit();
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
        var copyElements = document.querySelectorAll('.copy-societe');

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