<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $fillable = [
    'Passaport',
    'NomCognoms',
    'Edat',
    'Telefon',
    'Adreça',
    'Ciutat',
    'Pais',
    'Email',
    'TipusTargeta',
    'numTargeta'
    ]; 
}
