<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable =
    [
        'nome',
        'data_nascimento'
    ];

    public function endereco() 
    {
        return $this->hasMany(Endereco::class);
    }
}
