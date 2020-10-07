<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUnidades extends Model
{
    protected $table='unidades';
    protected $primaryKey = 'id_unidades';
    protected $fillable=['nomeApto','metragem','nomeTorre','andar','id_empreendimentos'];

    public function relEmpreendimentos(){
        return $this->hasOne('App\Models\Models\ModelEmpreendimento', 'id_empreendimentos','id_empreendimentos');
    }
}
