
@extends('layouts.user_type.auth')

@section('content')

<div class="card mb-4 mx-4">
    <div style="background-color: rgb(4, 18, 102)" class="alert  mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete you can use all functional!</strong> 
        </span>
    </div>

    <div class="card-header">
        <h5 class="mb-0">Create New Impot</h5>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('impots.store') }}">
            @csrf
           
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">password</label>
              <input type="text" class="form-control" id="password" name="password" required>
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">User</label>
            <select class="form-select" id="user_id" name="user_id" required>
                @foreach($users as $user)
                @if($user->id != 1)$
                <option value=""></option>

                <option value="{{ $user->id }}">{{ $user->id }} </option>
            @endif               
             @endforeach
            </select>
        </div>

            <button type="submit" class="btn btn-primary">Create impot</button>
        </form>
    </div>
</div>

@endsection
