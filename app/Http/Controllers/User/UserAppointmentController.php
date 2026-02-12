<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\Request;

class UserAppointmentController extends Controller
{
    public function index()
{
    $appointments = Appointment::where('client_id', auth()->id())->get();
    $services = Service::all();

   return view('user.appointments.index', compact('appointments', 'services'));

}
    public function store(Request $request)
{
    $request->validate([
        'service_id' => 'required',
        'date' => 'required|date',
        'time' => 'required'
    ]);

    $exists = Appointment::where('date', $request->date)
        ->where('time', $request->time)
        ->exists();

    if ($exists) {
        return back()->withErrors([
            'time' => 'Ce créneau est déjà réservé.'
        ]);
    }

    $service = Service::findOrFail($request->service_id);

    Appointment::create([
    'user_id' => auth()->id(), // obligatoire    
    'client_id' => auth()->id(),      // le client connecté
    'service_id' => $request->service_id,
    'date'      => $request->date,
    'time'      => $request->time,
    'status'    => 'pending',
]);


    return back();
}

    public function updateStatus(Appointment $appointment, $status)
{
    // Vérifier que l'utilisateur est bien propriétaire du rendez-vous
    if ($appointment->user_id !== auth()->id()) {
        abort(403);
    }

    $appointment->update(['status' => $status]);

    return back();
}

}

