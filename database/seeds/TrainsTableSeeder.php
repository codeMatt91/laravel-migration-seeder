<?php

use Illuminate\Database\Seeder;

use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Importo l'array da config
        $trains = config('trains');

        foreach ($trains as $train) {
            // Istanzio un oggetto della classe Train
            $new_train = new Train();
            
            $new_train->azienda = $train['azienda'];
            $new_train->stazione_di_partenza= $train['stazione_di_partenza'];
            $new_train->stazione_di_arrivo= $train['stazione_di_arrivo'];
            $new_train->orario_di_partenza= $train['orario_di_partenza'];
            $new_train->orario_di_arrivo= $train['orario_di_arrivo'];
            $new_train->numero_treno= $train['numero_treno'];
            $new_train->carrozze= $train['carrozze'];
            $new_train->in_orario= $train['in_orario'];
            $new_train->cancellato= $train['cancellato'];
        
            
            $new_train->save();        
        }
    }
}
