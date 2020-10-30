<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enum extends Model
{
    use HasFactory;

    const ANTIPASTI_MARE =0;
    const ANTIPASTI_TERRA=1;
    const PRIMI_MARE = 2;
    const PRIMI_TERRA = 3;
    const SECONDI_MARE = 4;
    const SECONDI_TERRA = 5;
    const INSALATE = 6;
    const DESSERT = 7;
    const PIZZE = 8;
    const BEVANDE = 9;
    const BIRRE = 10;
    const CAFFETTERIA = 11;
    const DIGESTIVI = 12;
    const VINO_SFUSO=13;
    const VINI_BIANCHI=14;
    const VINI_ROSSI=15;



}
