<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class matriculas
 * @package App\Models
 * @version April 27, 2020, 9:20 pm UTC
 *
 * @property string $matricula
 * @property integer $cc_dueño
 * @property integer $marca
 * @property integer $modelo
 */
class matriculas extends Model
{

    public $table = 'matriculas';
    



    public $fillable = [
        'matricula',
        'cc_dueño',
        'marca',
        'modelo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cc_dueño' => 'integer',
        'marca' => 'integer',
        'modelo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
