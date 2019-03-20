<?php

namespace App\Repositories;

use App\Models\Alumnos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AlumnosRepository
 * @package App\Repositories
 * @version March 20, 2019, 9:56 pm UTC
 *
 * @method Alumnos findWithoutFail($id, $columns = ['*'])
 * @method Alumnos find($id, $columns = ['*'])
 * @method Alumnos first($columns = ['*'])
*/
class AlumnosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'Apellidos',
        'tel'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alumnos::class;
    }
}
