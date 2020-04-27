<?php

namespace App\Repositories;

use App\Models\marcas;
use App\Repositories\BaseRepository;

/**
 * Class marcasRepository
 * @package App\Repositories
 * @version April 27, 2020, 7:39 pm UTC
*/

class marcasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'marca'
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
        return marcas::class;
    }
}
