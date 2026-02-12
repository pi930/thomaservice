<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    // Tous les champs qui doivent être remplissables
    protected $fillable = [
        'user_id',      // créateur (admin ou client)
        'client_id',    // personne concernée par le rendez-vous
        'service_id',
        'date',
        'time',
        'status'
    ];

    // Relation vers le client (la personne qui vient au rendez-vous)
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    // Relation vers le créateur du rendez-vous (admin ou client)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relation vers le service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}


