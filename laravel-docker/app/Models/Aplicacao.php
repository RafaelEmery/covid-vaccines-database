<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_aplicacao', 'numero_dose', 'paciente_id', 'profissional_id', 'local_id', 'vacina_id'
    ];

}
