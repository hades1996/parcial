<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class modelos
 * @package App\Models
 * @version April 27, 2020, 7:45 pm UTC
 *
 * @property string $año
 */
class modelos extends Model
{

    public $table = 'modelos';
    



    public $fillable = [
        'año'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_modelo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
