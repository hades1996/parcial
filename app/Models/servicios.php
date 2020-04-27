<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class servicios
 * @package App\Models
 * @version April 27, 2020, 9:11 pm UTC
 *
 * @property string $tipo_servicio
 * @property integer $valor
 */
class servicios extends Model
{

    public $table = 'servicios';
    



    public $fillable = [
        'tipo_servicio',
        'valor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'valor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
