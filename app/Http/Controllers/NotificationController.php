<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $user = auth()->user();
    Log::info('User ID: ' . $user->id);
    Log::info('Unread notifications: ' . $user->unreadNotifications->count());

    $notifications = $user->notifications()->latest()->get();
    
        return view('layouts.navbars.nav', compact('notifications'));
    }
    
    
}
