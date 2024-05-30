<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Eleicao extends Model
{
    use HasFactory;

    protected $table = 'eleicao';
    protected $primaryKey = 'id_eleicao';

    public function assembleia(): BelongsTo
    {
        return $this->belongsTo(Assembleia::class, 'id_assembleia');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_assembleia',
        'nome_oficio',
        'qt_vagas',
    ];
}
