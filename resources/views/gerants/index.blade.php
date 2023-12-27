
@extends('layouts.user_type.auth')

@section('content')
<div style="margin-top:-90px;">
    <form style="margin-left: 250px;" method="get" action="{{ route('gerants.search') }}">
        <div  style="width: 440px" class="ms-md-3 pe-md-3 d-flex align-items-center">
            <div style="margin-right: 15px" class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input style="background-color: rgb(255, 255, 255) "  type="text" class="form-control" placeholder="Type here..." name="search"  value="{{ request('search') }}">
            </div>
            </div>
        </form></div><br/><br/>

    <div style="background-color: rgb(4, 18, 102);" class="alert  mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete you can use all functional!</strong> 
        </span>
    </div>
<div>
   
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Gérants</h5>
                        </div>
                        <a style="background-color:#00FFFF" href="{{ route('gerants.create') }}" class="btn btn-sm mb-0" type="button">+&nbsp; New Associé</a>
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
                                        FullName
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        N°cin
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Role
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($gerants as $gerant)
                                    <tr>
                                        <td class="ps-4">
                                            <p class="text-xs font-weight-bold mb-0">{{ $gerant->id }}</p>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-sm me-3" style="background-color: #{{ substr(md5($gerant->name), 0, 6) }}; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 30px; height: 30px;">
                                                <span style="color: white; font-size: 14px;">{{ strtoupper(substr($gerant->name, 0, 1)) }}</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $gerant->name }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $gerant->email }}</p>
                                        </td>
                                        <td class="text-center">
                                        @if ($gerant->cin)
                                        <p class="text-xs font-weight-bold mb-0">{{ $gerant->cin }}</p>
                                    @else
                                        <p class="text-xs font-weight-bold mb-0">---</p>
                                    @endif
                                        </td>

                                        <td class="text-center">
                                         
                                                <p class="text-xs font-weight-bold mb-0">{{ $gerant->role }}</p>
                                        </td>
                                        
                                        
                                        
                                        
                                        
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $gerant->created_at->format('d/m/y') }}</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('gerants.edit', $gerant->id) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Associé">
                                                <i  class="fas fa-user-edit text-secondary"></i>
                                            </a>
                                           
                                            <form action="{{ route('gerants.destroy', $gerant->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" 
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
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
