<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models\ModelUnidades;

class unidadeTa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelUnidades $unidades)
    {
        $unidades->create([
        	'nomeApto'=>'Kitnet',
            'metragem'=>'50',
            'nomeTorre'=>'teste',

            'andar'=>'3',
            'id_empreendimentos'=>'4'

        ]);
        $unidades->create([
        	'nomeApto'=>'Cobertura',
            'metragem'=>'200',
            'nomeTorre'=>'teste2',

            'andar'=>'10',
            'id_empreendimentos'=>'2'

        ]);
        $unidades->create([
        	'nomeApto'=>'Kitnet2',
            'metragem'=>'100',
            'nomeTorre'=>'teste',

            'andar'=>'2',
            'id_empreendimentos'=>'1'

        ]);
        $unidades->create([
        	'nomeApto'=>'Cobertura 2',
            'metragem'=>'600',
            'nomeTorre'=>'teste4',

            'andar'=>'16',
            'id_empreendimentos'=>'3'

        ]);
    }
}
