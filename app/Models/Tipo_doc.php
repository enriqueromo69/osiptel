<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Tipo_doc
 * @package App\Models
 * @version December 19, 2021, 6:12 pm UTC
 *
 * @property string $des_doc
 * @property integer $max_caracter
 * @property string $titulo_label
 * @property string $desc_persona
 */
class Tipo_doc extends Model
{

    public $table = 'tipo_doc';
    
    public $timestamps = false;



    protected $primaryKey = 'idtp_doc';

    public $fillable = [
        'des_doc',
        'max_caracter',
        'titulo_label',
        'desc_persona'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idtp_doc' => 'integer',
        'des_doc' => 'string',
        'max_caracter' => 'integer',
        'titulo_label' => 'string',
        'desc_persona' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'des_doc' => 'nullable|string|max:45',
        'max_caracter' => 'nullable|integer',
        'titulo_label' => 'nullable|string|max:45',
        'desc_persona' => 'nullable|string|max:45'
    ];

    
}
