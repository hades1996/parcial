<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class marcas
 * @package App\Models
 * @version April 27, 2020, 9:00 pm UTC
 *
 * @property integer $id
 * @property string $marca
 */
class marcas extends Model
{

    public $table = 'marcas';
    



    public $fillable = [
        'id',
        'marca'
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
