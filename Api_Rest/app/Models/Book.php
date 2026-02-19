<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Book extends Model
{


    protected function casts(): array
    {
        return [
            'title',
            'description',
            'ISBN',
            'copias_totales',
            'copias_disponibles',
            'disponible'
        ];
    }
}
