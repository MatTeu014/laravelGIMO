<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class admsModel extends Model
{
    //defino o banco de dados que será utilizado
    use HasFactory;
    protected $table='adms'; //nome da tabela
    
}//fim da classe model