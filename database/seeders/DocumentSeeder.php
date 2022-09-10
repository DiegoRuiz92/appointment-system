<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $document = new Document(); 

        $document->document = "Cédula de Ciudadanía";
        $document->save();

        $document2 = new Document();

        $document2->document = "Tarjeta de Identidad";
        $document2->save();
        
        $document3 = new Document();

        $document3->document = "Salvoconducto de Permanencia";
        $document3->save();
    
        $document4 = new Document();

        $document4->document = "Registro Civil";
        $document4->save();
        
        $document5 = new Document();

        $document5->document = "Permiso Especial Permanencia";
        $document5->save();
        
        $document6 = new Document();

        $document6->document = "Pasaporte";
        $document6->save();

        $document7 = new Document();

        $document7->document = "Número de Identificación Tributaria";
        $document7->save();

        $document8 = new Document();

        $document8->document = "Cédula de Extranjería";
        $document8->save();

        $document9 = new Document();

        $document9->document = "Carnét Diplomático";
        $document9->save();
    }
}
