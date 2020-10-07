<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\ModelEmpreendimento;

class empreendimentoTa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelEmpreendimento $empreendimento)
    {
        $empreendimento->create([
        	'nome'=>'Gilcan Peças',
            'cidade'=>'São Joaquim da Barra',
            'valorMquadrado'=>'100.22',

            'dataEntrega'=>'2020-09-30',

        ]);
         $empreendimento->create([
        	'nome'=>'Dois Irmãos',
            'cidade'=>'Ribeirão Preto',
            'valorMquadrado'=>'200.22',

            'dataEntrega'=>'2020-10-30',

        ]);
          $empreendimento->create([
        	'nome'=>'Escritório de empreendimento',
            'cidade'=>'Sertãozinho',
            'valorMquadrado'=>'300.22',

            'dataEntrega'=>'2020-09-15',

        ]);
           $empreendimento->create([
        	'nome'=>'Empreendimento e Cia',
            'cidade'=>'Araraquara',
            'valorMquadrado'=>'600.22',

            'dataEntrega'=>'2020-09-24',

        ]);
    }
}
