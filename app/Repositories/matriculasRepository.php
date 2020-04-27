<?php

namespace App\Repositories;

use App\Models\matriculas;
use App\Repositories\BaseRepository;

/**
 * Class matriculasRepository
 * @package App\Repositories
 * @version April 27, 2020, 9:20 pm UTC
*/

class matriculasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'matricula',
        'cc_dueño',
        'marca',
        'modelo'
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
        return matriculas::class;
    }
}
