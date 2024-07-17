<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Usar esta variable en caso de que
    // no se respete el pascal case
    // - Modelo en singular (Post)
    // - Tabla en plural (Posts)
    // protected $table = "articles";
}
