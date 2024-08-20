<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $primaryKey = 'Id_producto';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'precio',
        'cantidad_total',
        'tipo_producto',
        'nombre_imagen',
    ];

    public function tallas()
    {
        return $this->hasMany(CantidadTalla::class, 'Id_producto', 'Id_producto');
    }
}
