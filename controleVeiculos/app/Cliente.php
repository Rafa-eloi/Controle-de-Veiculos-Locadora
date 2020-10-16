<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome','fone','cpf','estado','cidade','bairro','rua','numero','cep','cnh'
    ];
}
