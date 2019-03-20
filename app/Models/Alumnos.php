<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Alumnos
 * @package App\Models
 * @version March 20, 2019, 9:56 pm UTC
 *
 * @property string nombre
 * @property string Apellidos
 * @property string tel
 */
class Alumnos extends Model
{
    use SoftDeletes;

    public $table = 'alumnos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'Apellidos',
        'tel'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'Apellidos' => 'string',
        'tel' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'Apellidos' => 'required'
    ];

    
}
