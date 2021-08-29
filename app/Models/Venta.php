<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = 'venta';
    protected $fillable = ['fecha','fecha_e','total','forma_pago'];
    public $timestamps = false;

    /**
 * Cliente que realizo la compra.
 */
 public function cliente() {
    return $this->belongsTo('App\Models\Cliente','cliente');
}
/**
 * Lista de productos de la venta
 */
public function productos() {
    return $this->belongsToMany('App\Models\Producto','venta_producto','idProducto','idVenta');
}
}
