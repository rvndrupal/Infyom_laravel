<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ponencia
 * @package App\Models
 * @version March 20, 2019, 8:12 pm UTC
 *
 * @property string nombre
 * @property integer ponente_id
 */
class Ponencia extends Model
{
    use SoftDeletes;

    public $table = 'ponencias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'ponente_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'ponente_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];

    public function ponente()
    {
        return $this->hasOne('App\Models\Ponente','id');
    }

    
}
