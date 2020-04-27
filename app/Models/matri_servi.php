<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class matri_servi
 * @package App\Models
 * @version April 27, 2020, 9:22 pm UTC
 *
 * @property integer $matricula
 * @property integer $servicio
 */
class matri_servi extends Model
{

    public $table = 'matri_servi';
    



    public $fillable = [
        'matricula',
        'servicio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'matricula' => 'integer',
        'servicio' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
