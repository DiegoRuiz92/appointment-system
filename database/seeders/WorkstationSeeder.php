<?php

namespace Database\Seeders;

use App\Models\Workstation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkstationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workstation = new Workstation(); 

        $workstation->name = "Director de Pintura";
        $workstation->technician = "Alex Rueda";
        $workstation->area = "Lamina y Pintura";
        $workstation->save();

    }
}
