<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_sus', 'nome', 'cpf', 'data_nascimento', 'nome_mae', 'sexo_genetico', 'endereco', 'estado_civil', 'escolaridade', 'religiao', 'raca_cor_etnia', 'possui_plano_saude'
    ];
}
