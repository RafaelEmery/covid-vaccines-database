<?php

namespace App\Http\Resources;

use App\Models\Vacina;
use Illuminate\Http\Resources\Json\JsonResource;

class AplicacaoResource extends JsonResource
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
            'id_aplicacao' => $this->resource->id_aplicacao,
            'data_aplicacao' => $this->resource->data_aplicacao,
            'numero_dose' => $this->resource->numero_dose,
            'paciente' => new PessoaResource($this->resource->paciente),
            'profissional' => new PessoaResource($this->resource->profissional),
            'local' => new LocalResource($this->resource->local),
            'vacina' => new VacinaResource($this->resource->vacina)
        ];
    }
}
