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
        <h5 class="mb-0">Edit Damancom</h5>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('damancoms.update', $damancom->id) }}">
            @csrf
            @method('PUT') 

            <div class="mb-3">
                <label for="name" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $damancom->email }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">password</label>
                <input type="password" class="form-control" id="email" name="password" value="{{ $damancom->password }}" required>
            </div>
            <div class="mb-3">
                <label for="cin" class="form-label">User_id</label>
                <select class="form-select" id="user_id" name="user_id" required>
                    @foreach($users as $user)
                        @if($user->id != 1)
                            <option value="{{ $user->id }}" {{ $damancom->user_id == $user->id ? 'selected' : '' }}>
                                {{ $user->id }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
           

            <button type="submit" class="btn btn-primary">Update Damancom</button>
        </form>
    </div>
</div>

@endsection
