<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... (your head content) ... -->
</head>

<body>

    @extends('layouts.user_type.auth')

    @section('content')
    @foreach ($notifications as $notification)
    <div class="notification">
        <p>{{ $notification->message }}</p>
        <small>{{ $notification->created_at->diffForHumans() }}</small>
    </div>
@endforeach
    @endsection

</body>

</html>
