<?php

namespace App\Repositories;

use App\Models\modelos;
use App\Repositories\BaseRepository;

/**
 * Class modelosRepository
 * @package App\Repositories
 * @version April 27, 2020, 7:45 pm UTC
*/

class modelosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'año'
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
        return modelos::class;
    }
}
