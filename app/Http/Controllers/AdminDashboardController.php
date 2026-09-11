<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.dashboard', compact('contacts'));
    }
    public function calendar()
{
    // Récupère tous les rendez-vous confirmés
    $contacts = Contact::whereNotNull('rendezvous_date')->get();

    // Mois en cours
    $year = now()->year;
    $month = now()->month;

    // Premier jour du mois
    $firstDay = now()->startOfMonth();
    $daysInMonth = now()->daysInMonth;

    return view('admin.calendar', compact('contacts', 'year', 'month', 'firstDay', 'daysInMonth'));
}


    public function updateRendezvous(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $contact->rendezvous_confirme = $request->has('rendezvous_confirme');
        $contact->rendezvous_date = $request->rendezvous_date;

        $contact->save();

        return back()->with('success', 'Rendez-vous mis à jour.');
    }
}

