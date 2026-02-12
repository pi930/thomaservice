<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
   public function index()
{
    $appointments = Appointment::with(['client', 'service'])->get();
    $services = Service::all(); // ← indispensable pour le formulaire admin

    return view('admin.appointments.index', compact('appointments', 'services'));
}

    
   public function show(Appointment $appointment)
{
    // Charger les relations du rendez-vous affiché
    $appointment->load(['client', 'service']);

    // Planning de la semaine
    $start = now()->startOfWeek();
    $end = now()->endOfWeek();

    // Charger TOUS les rendez-vous de la semaine AVEC leurs relations
    $appointments = Appointment::with(['client', 'service'])
        ->whereBetween('date', [$start, $end])
        ->where('status', '!=', 'cancelled')
        ->get();

    // Jours et heures
    $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
    $hours = ['09:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00'];

    return view('admin.appointments.show', compact(
        'appointment',
        'appointments',
        'days',
        'hours'
    ));
}


public function store(Request $request)
{
    $request->validate([
        'client_name' => 'required|string|max:255',
        'service_id' => 'required|exists:services,id',
        'date' => 'required|date',
        'time' => 'required',
    ]);

    // Vérifier si le client existe déjà
    $client = User::where('name', $request->client_name)->first();

    // Sinon, le créer automatiquement
    if (!$client) {
        $client = User::create([
            'name' => $request->client_name,
            'email' => strtolower(str_replace(' ', '', $request->client_name)) . '@client.local',
            'password' => Hash::make('password'),
            'role' => 'client',
        ]);
    }

    // Créer le rendez-vous
    Appointment::create([
        'user_id'   => auth()->id(),      // admin
        'client_id' => $client->id,       // client créé ou trouvé
        'service_id' => $request->service_id,
        'date'      => $request->date,
        'time'      => $request->time,
        'status'    => 'pending',
    ]);

    return back()->with('success', 'Rendez-vous créé pour ' . $client->name);
}



    public function updateStatus(Appointment $appointment, $status)
    {
        $appointment->update(['status' => $status]);
        return back();
    }
}

