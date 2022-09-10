<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $office = new Office(); 

        $office->name = "Belmonte";
        $office->save();

        $office2 = new Office();

        $office2->name = "Dosquebradas";
        $office->save();
    }
}
