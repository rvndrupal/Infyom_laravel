<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ponente
 * @package App\Models
 * @version March 20, 2019, 7:09 pm UTC
 *
 * @property string nombre
 * @property string pais
 * @property string foto
 */
class Ponente extends Model
{
    use SoftDeletes;

    public $table = 'ponentes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'pais',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'pais' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function ponencias()
    {
        return $this->hasMany('App\Models\Ponencia');
    }

    
}
