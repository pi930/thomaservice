<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function send(Request $request)
{
    // Validation
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:50',
        'message' => 'required|string',
    ]);

    // Enregistrement en base
    $contact = Contact::create([
        'name'    => $data['name'],
        'email'   => $data['email'],
        'phone'   => $data['phone'],
        'content' => $data['message'], // correspond à ta colonne "content"
    ]);

   Mail::send('emails.contact', [
    'name'    => $data['name'],
    'email'   => $data['email'],
    'phone'   => $data['phone'],
    'content' => $data['message'], // IMPORTANT
], function ($mail) {
    $mail->to('contact@infortom.fr')
         ->subject('Nouveau message du formulaire de contact');
});


    return redirect('/admin/dashboard')->with('success', 'Message reçu et enregistré.');
}

}





