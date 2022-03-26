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
        return $this->belongsToMany(Pessoa::class);
    }

    public function estados() 
    {
        return $this->hasMany(Estado::class);
    }
}
