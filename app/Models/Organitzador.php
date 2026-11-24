<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Organitzador extends Model
{
    use HasFactory;

    protected $table = 'organitzadors';

    protected $fillable = [
        'nom',
        'email',
        'telefon',
    ];

}
