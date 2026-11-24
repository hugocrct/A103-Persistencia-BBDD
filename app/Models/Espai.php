<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Espai extends Model
{
    use HasFactory;

    protected $table = 'espais';

    protected $fillable = [
        'nom',
        'aforament',
        'adreca',
    ];
}