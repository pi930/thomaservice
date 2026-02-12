<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Message;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'usersCount' => User::count(),
            'pendingAppointments' => Appointment::where('status', 'pending')->count(),
            'unreadMessages' => Message::whereNull('read_at')->count(),
        ]);
    }
}

