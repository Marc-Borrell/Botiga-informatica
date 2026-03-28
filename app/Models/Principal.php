<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Principal extends Model
{
    use HasFactory;
    protected $primaryKey = 'index';
    protected $fillable = ['nomCurs', 'tema', 'descripcio', 'durada_hores', 'nivell', 'preu', 'data_inici', 'actiu', 'modalitat', 'places_maximes'];
}
