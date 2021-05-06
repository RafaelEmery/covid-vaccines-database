<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $primaryKey = "id_pessoa";

    protected $dates = [
        "data_nascimento"
    ];

    protected $fillable = [
        'numero_sus', 'nome', 'cpf', 'data_nascimento', 'nome_mae', 'sexo_genetico', 'local_id', 'estado_civil', 'escolaridade', 'religiao', 'raca_cor_etnia', 'possui_plano_saude'
    ];

    public function local()
    {
        return $this->belongsTo(Local::class, "local_id","id_local");
    }
}
