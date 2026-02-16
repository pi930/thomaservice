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
        $services = Service::all();

        return view('admin.appointments.index', compact('appointments', 'services'));
    }


    public function show(Appointment $appointment)
    {
        // Charger les relations du rendez-vous affiché
        $appointment->load(['client', 'service']);

        // Début de semaine
        $start = now()->startOfWeek();

        // Génération des 7 jours avec label + date réelle
        $days = [];
        for ($i = 0; $i < 7; $i++) {
            $days[] = [
                'label' => $start->copy()->addDays($i)->locale('fr')->isoFormat('dddd'),
                'date'  => $start->copy()->addDays($i)->toDateString(),
            ];
        }

        // Charger tous les rendez-vous de la semaine
        $appointments = Appointment::with(['client', 'service'])
            ->whereBetween('date', [
                $start->toDateString(),
                $start->copy()->addDays(6)->toDateString()
            ])
            ->where('status', '!=', 'cancelled')
            ->get();

        // Heures affichées dans le planning
        $hours = [
            '09:00','10:00','11:00','12:00',
            '13:00','14:00','15:00','16:00','17:00'
        ];

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
            'service_id'  => 'required|exists:services,id',
            'date'        => 'required|date',
            'time'        => 'required',
        ]);

        // Vérifier si le client existe déjà
        $client = User::where('name', $request->client_name)->first();

        // Sinon, le créer automatiquement
        if (!$client) {
            $client = User::create([
                'name'     => $request->client_name,
                'email'    => strtolower(str_replace(' ', '', $request->client_name)) . '@client.local',
                'password' => Hash::make('password'),
                'role'     => 'client',
            ]);
        }

        // Empêcher les doublons
        $exists = Appointment::where('date', $request->date)
            ->where('time', $request->time)
            ->where('status', '!=', 'cancelled')
            ->exists();

        if ($exists) {
            return back()->withErrors([
                'time' => 'Ce créneau est déjà réservé.'
            ]);
        }

        // Créer le rendez-vous
        Appointment::create([
            'user_id'    => auth()->id(), // admin
            'client_id'  => $client->id,
            'service_id' => $request->service_id,
            'date'       => $request->date,
            'time'       => $request->time,
            'status'     => 'pending',
        ]);

        return back()->with('success', 'Rendez-vous créé pour ' . $client->name);
    }


    public function updateStatus(Appointment $appointment, $status)
    {
        $appointment->update(['status' => $status]);
        return back();
    }
}
