<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Operador
 * @package App\Models
 * @version December 19, 2021, 5:46 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $pedidos
 * @property string $des_operador
 * @property string $correo
 */
class Operador extends Model
{

    public $table = 'operador';
    
    public $timestamps = false;



    protected $primaryKey = 'idoperador';

    public $fillable = [
        'des_operador',
        'correo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idoperador' => 'integer',
        'des_operador' => 'string',
        'correo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'des_operador' => 'nullable|string|max:45',
        'correo' => 'nullable|string|max:45'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pedidos()
    {
        return $this->hasMany(\App\Models\Pedido::class, 'idoperador');
    }
}
