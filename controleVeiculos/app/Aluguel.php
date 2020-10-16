<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    protected $fillable = [
        'cliente_id','veiculo_id','data_devolucao','valor'
    ];
}
