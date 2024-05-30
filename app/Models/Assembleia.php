<?php

namespace App\Models;

use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assembleia extends Model
{
    use HasFactory;

    protected $table = 'assembleias';
    protected $primaryKey = 'id_assembleia';

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
        'nome',
        'ata_convocacao',
        'dia_assembleia',
        'observacao',
    ];
}
