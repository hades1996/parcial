<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class modelos
 * @package App\Models
 * @version April 27, 2020, 9:08 pm UTC
 *
 * @property string $tipo_modelo
 */
class modelos extends Model
{

    public $table = 'modelos';
    



    public $fillable = [
        'tipo_modelo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
