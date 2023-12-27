
@extends('layouts.user_type.auth')

@section('content')
<div style="margin-top:-90px;">
    <form style="margin-left: 250px;" method="get" action="{{ route('societes.search') }}">
        <div  style="width: 440px" class="ms-md-3 pe-md-3 d-flex align-items-center">
            <div style="margin-right: 15px" class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input style="background-color: rgb(255, 255, 255) "  type="text" class="form-control" placeholder="Type here..." name="search"  value="{{ request('search') }}">
            </div>
            </div>
        </form></div><br/><br/>
<div>
    
    <div style="background-color: rgb(4, 18, 102)" class="alert  mx-4" role="alert">
        <span class="text-white">
            <strong>Ajouter, Modifiér, Supprimer tu peux faire tous les fonctionalités!</strong> 
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Tous Les Sociétés</h5>
                        </div>
                        <a style="background-color:#00FFFF" href="{{ route('societes.create') }}" class="btn btn-sm mb-0" type="button">+&nbsp; New Associé</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Avatar
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Nom de Société 
                                    </th>
                                   
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Form Juridique
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Siege Social
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                     Capital
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Activite Principale
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      RC
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       Patente
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                       IF
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CNSS
                                     </th>
                                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ICE
                                     </th>
                                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                         RIB
                                      </th>
                                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Date D'exploitation
                                     </th>
                                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                         Date De Début D'exploitation Activité
                                      </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                         Date De Creation
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($societes as $societe)
                                    <tr>
                                        <td class="ps-4">
                                            <p class="text-xs font-weight-bold mb-0">{{ $societe->id }}</p>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-sm me-3" style="background-color: #{{ substr(md5($societe->name), 0, 6) }}; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 30px; height: 30px;">
                                                <span style="color: white; font-size: 14px;">{{ strtoupper(substr($societe->name, 0, 1)) }}</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $societe->name }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $societe->formes_juridique }}</p>
                                        </td>
                                        <td class="text-center">
                                     
                                        <p class="text-xs font-weight-bold mb-0">{{ $societe->siege_social }}</p>
                                   
                                        </td>

                                      
                                        <td class="text-center">
                                         
                                            <p class="text-xs font-weight-bold mb-0">{{ $societe->capital }}</p>
                                    </td>
                                    <td class="text-center">
                                         
                                        <p class="text-xs font-weight-bold mb-0">{{ $societe->activite_principal }}</p>
                                </td>
                                <td class="text-center">
                                         
                                    <p class="text-xs font-weight-bold mb-0">{{ $societe->rc }}</p>
                            </td>
                            <td class="text-center">
                                         
                                <p class="text-xs font-weight-bold mb-0">{{ $societe->patente }}</p>
                        </td>
                        <td class="text-center">
                                         
                            <p class="text-xs font-weight-bold mb-0">{{ $societe->if }}</p>
                    </td>
                    <td class="text-center">
                                         
                        <p class="text-xs font-weight-bold mb-0">{{ $societe->cnss }}</p>
                </td>
                <td class="text-center">
                                         
                    <p class="text-xs font-weight-bold mb-0">{{ $societe->ice }}</p>
            </td>
            <td class="text-center">
                                         
                <p class="text-xs font-weight-bold mb-0">{{ $societe->rib }}</p>
        </td>
        <td class="text-center">
                                         
            <p class="text-xs font-weight-bold mb-0">{{ $societe->date_exploitation }}</p>
    </td>
    <td class="text-center">
                                         
        <p class="text-xs font-weight-bold mb-0">{{ $societe->date_debut_exploitation }}</p>
</td>
        
<td class="text-center">
    <span class="text-secondary text-xs font-weight-bold">{{ $societe->created_at->format('d/m/y') }}</span>
</td>        
                                        
                                        
                                        
                                       
<td class="text-center">
    <a style="color: #1cd09d" href="{{ route('societes.edit', $societe->id) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit société">
        <i style="color: #1cd09d" class="fas fa-user-edit"></i>
    </a>

    <form data-bs-toggle="tooltip" data-bs-original-title="Destroy société" action="{{ route('societes.destroy', $societe->id) }}" method="post" style="display: inline-block;">
        @csrf
        @method('DELETE')

        <button type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
            <i style="color: red" onclick="return confirm('Are you sure?')" class="fas fa-trash-alt"></i>
        </button>
    </form>

    <a href="{{ route('societes.show', $societe->id) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Details société">
        <i class="fas fa-info-circle text-info"></i>
    </a>
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
</div>

@endsection
