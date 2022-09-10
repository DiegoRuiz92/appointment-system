<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'administrador',
            'email' => 'admin@caminos.com.co',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('administrador');

        $user1 = User::create([
            'name' => 'asesor',
            'email' => 'asesor@caminos.com.co',
            'password' => bcrypt('password'),
        ]);
        
        $user1->assignRole('asesor');
    }
}
