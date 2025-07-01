<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Articulo;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    //Se importe el modelo Categoria y luego se creo una funcion para hacer un joineo de tablas con Articulo para que no figure el numero de ID, sino el nombre de la categoria

    public function articulo()
    {
        return $this->hasMany(Articulo::class, 'categoria_id', 'id');

    }




}
