<?php

namespace App\Repositories;

use App\Models\Pddetalle;
use App\Repositories\BaseRepository;

/**
 * Class PddetalleRepository
 * @package App\Repositories
 * @version December 19, 2021, 6:11 pm UTC
*/

class PddetalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idpedido',
        'descripcion',
        'archivo'
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
        return Pddetalle::class;
    }
}
