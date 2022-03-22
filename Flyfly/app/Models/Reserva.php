<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
    'Passaport',
    'CodiVol',
    'Localitzador',
    'numSeient',
    'equipatgeMa',
    'equipatgeCabina',
    'QuantFact',
    'tipusAsse'.
    'Preu',
    'tipusCheck',
    'dataArribada'.
    'Clase'
    ]; 
}
