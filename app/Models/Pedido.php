<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Pedido
 * @package App\Models
 * @version December 19, 2021, 6:11 pm UTC
 *
 * @property \App\Models\Usercli $idusercli
 * @property \App\Models\Operador $idoperador
 * @property \App\Models\Producto $idproducto
 * @property \Illuminate\Database\Eloquent\Collection $pddetalles
 * @property string $des_pedido
 * @property integer $idoperador
 * @property integer $idproducto
 * @property string $obs_gn
 * @property integer $idusercli
 * @property string|\Carbon\Carbon $fec_reg
 * @property boolean $solucion
 * @property boolean $estado
 * @property string $supervisor
 * @property string $altitud
 * @property string $latitud
 */
class Pedido extends Model
{

    public $table = 'pedido';
    
    public $timestamps = false;



    protected $primaryKey = 'idpedido';

    public $fillable = [
        'des_pedido',
        'idoperador',
        'idproducto',
        'obs_gn',
        'idusercli',
        'fec_reg',
        'solucion',
        'estado',
        'supervisor',
        'altitud',
        'latitud'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idpedido' => 'integer',
        'des_pedido' => 'string',
        'idoperador' => 'integer',
        'idproducto' => 'integer',
        'obs_gn' => 'string',
        'idusercli' => 'integer',
        'fec_reg' => 'datetime',
        'solucion' => 'boolean',
        'estado' => 'boolean',
        'supervisor' => 'string',
        'altitud' => 'string',
        'latitud' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'des_pedido' => 'nullable|string|max:255',
        'idoperador' => 'nullable|integer',
        'idproducto' => 'nullable|integer',
        'obs_gn' => 'nullable|string|max:255',
        'idusercli' => 'nullable|integer',
        'fec_reg' => 'nullable',
        'solucion' => 'nullable|boolean',
        'estado' => 'nullable|boolean',
        'supervisor' => 'nullable|string|max:45',
        'altitud' => 'nullable|string|max:45',
        'latitud' => 'nullable|string|max:45'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idusercli()
    {
        return $this->belongsTo(\App\Models\Usercli::class, 'idusercli');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idoperador()
    {
        return $this->belongsTo(\App\Models\Operador::class, 'idoperador');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idproducto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'idproducto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pddetalles()
    {
        return $this->hasMany(\App\Models\Pddetalle::class, 'idpedido');
    }
}
