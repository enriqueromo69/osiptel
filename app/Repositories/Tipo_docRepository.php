<?php

namespace App\Repositories;

use App\Models\Tipo_doc;
use App\Repositories\BaseRepository;

/**
 * Class Tipo_docRepository
 * @package App\Repositories
 * @version December 19, 2021, 6:12 pm UTC
*/

class Tipo_docRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'des_doc',
        'max_caracter',
        'titulo_label',
        'desc_persona'
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
        return Tipo_doc::class;
    }
}
