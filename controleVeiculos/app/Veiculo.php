<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [
        'marca','modelo','placa','estado','ano_fabricacao','km_rodado','crlv','renavam','chassi','disponivel','valor_diaria'
    ];
}
