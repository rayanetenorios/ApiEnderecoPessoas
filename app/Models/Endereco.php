<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';

    protected $fillable =
    [
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado_id',
        'pessoa_id'
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'id', 'pessoa_id');
    }

    public function estados()
    {
        return $this->belongsTo(Estado::class, 'id', 'estado_id');
    }
}
