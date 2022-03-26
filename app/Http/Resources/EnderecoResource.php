<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EnderecoResource extends JsonResource
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
            'logradouro' => $this->logradouro,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'cidade' => $this->cidade,
            'estado_id ' => $this->estado_id,
            'pessoa_id  ' => $this->pessoa_id,
        ];

        // return parent::toArray($request);
    }
}
