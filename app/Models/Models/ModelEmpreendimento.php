<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelEmpreendimento extends Model
{
    protected $table='empreendimentos';
    protected $primaryKey = 'id_empreendimentos';
    protected $fillable=['nome','cidade','valorMquadrado','dataEntrega'];

    public function relUnidades(){
        return $this->hasMany('App\Models\Models\ModelUnidades', 'id_empreendimentos');
    }
}
