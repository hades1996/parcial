<?php

namespace App\Repositories;

use App\Models\matri_servi;
use App\Repositories\BaseRepository;

/**
 * Class matri_serviRepository
 * @package App\Repositories
 * @version April 27, 2020, 9:22 pm UTC
*/

class matri_serviRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'matricula',
        'servicio'
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
        return matri_servi::class;
    }
}
