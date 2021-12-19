<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Testteo
 * @package App\Models
 * @version November 25, 2021, 5:08 am UTC
 *
 * @property string $detalle
 */
class Testteo extends Model
{

    public $table = 'testteo';
    
    public $timestamps = false;



    protected $primaryKey = 'idtest';

    public $fillable = [
        'detalle'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idtestteo' => 'integer',
        'detalle' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'detalle' => 'nullable|string|max:45'
    ];

    
}
