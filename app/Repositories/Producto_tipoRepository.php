<?php

namespace App\Repositories;

use App\Models\Producto_tipo;
use App\Repositories\BaseRepository;

/**
 * Class Producto_tipoRepository
 * @package App\Repositories
 * @version December 19, 2021, 6:11 pm UTC
*/

class Producto_tipoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'des_tipoprod'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Producto_tipo::class;
    }
}
