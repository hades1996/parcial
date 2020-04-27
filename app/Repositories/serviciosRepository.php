<?php

namespace App\Repositories;

use App\Models\servicios;
use App\Repositories\BaseRepository;

/**
 * Class serviciosRepository
 * @package App\Repositories
 * @version April 27, 2020, 9:11 pm UTC
*/

class serviciosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_servicio',
        'valor'
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
        return servicios::class;
    }
}
