<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class marcas
 * @package App\Models
 * @version April 27, 2020, 7:39 pm UTC
 *
 * @property string $marca
 */
class marcas extends Model
{

    public $table = 'marcas';
    



    public $fillable = [
        'marca'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_marca' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
