<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // Le decimos que la tabla es categorias
    // protected $table = 'categorias';
    // Le decimos cual es la primary key
    // protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'descripcion', 'condicion'];
}
