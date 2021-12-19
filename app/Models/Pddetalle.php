<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Pddetalle
 * @package App\Models
 * @version December 19, 2021, 6:11 pm UTC
 *
 * @property \App\Models\Pedido $idpedido
 * @property integer $idpedido
 * @property string $descripcion
 * @property string $archivo
 */
class Pddetalle extends Model
{

    public $table = 'pddetalle';
    
    public $timestamps = false;



    protected $primaryKey = 'idpddetalle';

    public $fillable = [
        'idpedido',
        'descripcion',
        'archivo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idpddetalle' => 'integer',
        'idpedido' => 'integer',
        'descripcion' => 'string',
        'archivo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idpedido' => 'nullable|integer',
        'descripcion' => 'nullable|string|max:45',
        'archivo' => 'nullable|string|max:45'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idpedido()
    {
        return $this->belongsTo(\App\Models\Pedido::class, 'idpedido');
    }
}
