<?php

namespace App\Repositories;

use App\Models\Usercli;
use App\Repositories\BaseRepository;

/**
 * Class UsercliRepository
 * @package App\Repositories
 * @version December 19, 2021, 6:12 pm UTC
*/

class UsercliRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'celular',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
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
        return Usercli::class;
    }
}
