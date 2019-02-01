<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    // protected $table = 'categorias'; Como el modelo se llama categoria, laravel asume que su tabla es categorias
    // protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'descripcion', 'condicion'];
}
