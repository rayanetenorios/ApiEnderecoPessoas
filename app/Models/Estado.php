<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';

    protected $fillable =
    [
        'nome',
        'uf',
        'slug'
    ];

    public $timestamps = false;

    public function endereco() 
    {
        return $this->hasMany(Endereco::class);
    }
}
