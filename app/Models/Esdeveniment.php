<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Esdeveniment extends Model
{
    use HasFactory;

    protected $table = 'esdeveniments';

    protected $fillable = [
        'titol',
        'descripcio',
        'data_esdeveniment',
        'preu',
        'actiu',
        'espai_id',
        'organitzador_id',
    ];

    public function espai()
    {
        return $this->belongsTo(Espai::class);
    }

    public function organitzador()
    {
        return $this->belongsTo(Organitzador::class);
    }
}