<?php

namespace App\Repositories;

use App\Models\Operador;
use App\Repositories\BaseRepository;

/**
 * Class OperadorRepository
 * @package App\Repositories
 * @version December 19, 2021, 5:46 pm UTC
*/

class OperadorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'des_operador',
        'correo'
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
        return Operador::class;
    }
}
