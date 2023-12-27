@extends('layouts.user_type.auth')

@section('content')

<div>
    <div style="background-color: rgb(4, 18, 102)" class="alert  mx-4" role="alert">
        <span class="text-white">
            <strong>Ajouter, Modifiér, Supprimer etafficher tu peux faire tous les fonctionalités!</strong> 
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Détails de la Damancom</h5>
                        </div>
                     

<a style="background-color:#1cd09d ;color:white;width:180px;height:35px;margin-left:300px" href="{{ route('damancoms.edit', ['id' => $damancom->id]) }}" class="btn btn-sm mb-0" type="button">
    <i class="fas fa-user-edit"></i>&nbsp; Modifier
</a>

                        <form action="{{ route('damancoms.destroy', $damancom->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-user-slash"></i>&nbsp; Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <tbody>
                                <tr>
                                    <td class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $damancom->id }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                        Avatar
                                    </td>
                                    <td>
                                        <div class="avatar avatar-sm me-3" style="background-color: #{{ substr(md5($damancom->email), 0, 6) }}; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 30px; height: 30px;">
                                            <span style="color: white; font-size: 14px;">{{ strtoupper(substr($damancom->email, 0, 1)) }}</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                       Email de Damancom
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $damancom->email }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                       Password de Damancom
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $damancom->password }}</p>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7">
                                       User_id de Damancom
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $damancom->user_id }}</p>
                                    </td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
