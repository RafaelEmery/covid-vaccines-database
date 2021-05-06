<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicacao extends Model
{
    use HasFactory;

    protected $primaryKey = "id_aplicacao";

    protected $dates = [
        "data_aplicacao"
    ];

    protected $fillable = [
        'data_aplicacao', 'numero_dose', 'paciente_id', 'profissional_id', 'local_id', 'vacina_id'
    ];

    public function paciente()
    {
        return $this->belongsTo(Pessoa::class, "paciente_id", "id_pessoa");
    }

    public function profissional()
    {
        return $this->belongsTo(Pessoa::class, "profissional_id", "id_pessoa");
    }

    public function local()
    {
        return $this->belongsTo(Local::class, "local_id", "id_local");
    }

    public function vacina()
    {
        return $this->belongsTo(Vacina::class, "vacina_id", "id_vacina");
    }

    public function getRouteKeyName()
    {
        return 'id_aplicacao';
    }
}
