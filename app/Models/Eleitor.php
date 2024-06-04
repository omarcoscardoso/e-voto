<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleitor extends Model
{
    use HasFactory;

    protected $table = 'eleitor';
    protected $primaryKey = 'id_eleitor';

    protected $fillable = [
        'nome_eleitor',
        'sexo',
        'nascimento',
        'admissao',
    ];

}
