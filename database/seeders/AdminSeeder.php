<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Thomas Pierrard',
            'email' => 'admin@infortom.fr',
            'password' => Hash::make('Sauvegarde'),
            'is_admin' => 1
        ]);
    }
}

