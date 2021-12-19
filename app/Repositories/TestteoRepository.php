<?php

namespace App\Repositories;

use App\Models\Testteo;
use App\Repositories\BaseRepository;

/**
 * Class TestteoRepository
 * @package App\Repositories
 * @version November 25, 2021, 5:08 am UTC
*/

class TestteoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'detalle'
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
        return Testteo::class;
    }
}
