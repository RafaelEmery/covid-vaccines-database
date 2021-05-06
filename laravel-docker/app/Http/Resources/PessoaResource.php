<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PessoaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_pessoa' => $this->resource->id_pessoa,
            'numero_sus' => $this->resource->numero_sus,
            'nome' => $this->resource->nome,
            'cpf' => $this->resource->cpf,
            'data_nascimento' => $this->resource->data_nascimento,
            'nome_mae' => $this->resource->nome_mae,
            'sexo_genetico' => $this->resource->sexo_genetico,
            'local' => new LocalResource($this->resource->local),
            'estado_civil' => $this->resource->estado_civil,
            'escolaridade' => $this->resource->escolaridade,
            'religiao' => $this->resource->religiao,
            'raca_cor_etnia' => $this->resource->raca_cor_etnia,
            'possui_plano_saude' => $this->resource->possui_plano_saude ? "Sim" : "Não"
        ];
    }
}
