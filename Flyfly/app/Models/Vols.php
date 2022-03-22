<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vols extends Model
{
    use HasFactory;
    protected $fillable = [
        'codiVol',
        'codiModel',
        'CiutatOrigen',
        'CiutatDestinacio',
        'TerminalOrigen',
        'TerminalDestinacio',
        'dataSortida',
        'dataArribada',
        'horaSortida',
        'horaArribada',
        'Classe',
        ];
}
