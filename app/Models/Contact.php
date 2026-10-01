<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'content',
        'rendezvous_confirme',
        'rendezvous_date',
    ];

    protected $casts = [
        'rendezvous_confirme' => 'boolean',
        'rendezvous_date' => 'datetime',
    ];
}

