<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Producto
 * @package App\Models
 * @version December 19, 2021, 6:11 pm UTC
 *
 * @property \App\Models\ProductoTipo $idprodtipo
 * @property \Illuminate\Database\Eloquent\Collection $pedidos
 * @property integer $idprodtipo
 * @property string $des_producto
 * @property boolean $editable
 */
class Producto extends Model
{

    public $table = 'producto';
    
    public $timestamps = false;



    protected $primaryKey = 'idproducto';

    public $fillable = [
        'idprodtipo',
        'des_producto',
        'editable'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idproducto' => 'integer',
        'idprodtipo' => 'integer',
        'des_producto' => 'string',
        'editable' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idprodtipo' => 'nullable|integer',
        'des_producto' => 'nullable|string|max:45',
        'editable' => 'nullable|boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idprodtipo()
    {
        return $this->belongsTo(\App\Models\ProductoTipo::class, 'idprodtipo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pedidos()
    {
        return $this->hasMany(\App\Models\Pedido::class, 'idproducto');
    }
}
