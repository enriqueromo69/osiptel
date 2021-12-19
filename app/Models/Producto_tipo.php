<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Producto_tipo
 * @package App\Models
 * @version December 19, 2021, 6:11 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property string $des_tipoprod
 */
class Producto_tipo extends Model
{

    public $table = 'producto_tipo';
    
    public $timestamps = false;



    protected $primaryKey = 'idprodtipo';

    public $fillable = [
        'des_tipoprod'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idprodtipo' => 'integer',
        'des_tipoprod' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'des_tipoprod' => 'nullable|string|max:45'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productos()
    {
        return $this->hasMany(\App\Models\Producto::class, 'idprodtipo');
    }
}
