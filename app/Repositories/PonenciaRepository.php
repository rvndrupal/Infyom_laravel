<?php

namespace App\Repositories;

use App\Models\Ponencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PonenciaRepository
 * @package App\Repositories
 * @version March 20, 2019, 8:12 pm UTC
 *
 * @method Ponencia findWithoutFail($id, $columns = ['*'])
 * @method Ponencia find($id, $columns = ['*'])
 * @method Ponencia first($columns = ['*'])
*/
class PonenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'ponente_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ponencia::class;
    }
}
