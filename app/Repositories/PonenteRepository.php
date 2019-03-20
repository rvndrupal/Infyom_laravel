<?php

namespace App\Repositories;

use App\Models\Ponente;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PonenteRepository
 * @package App\Repositories
 * @version March 20, 2019, 7:09 pm UTC
 *
 * @method Ponente findWithoutFail($id, $columns = ['*'])
 * @method Ponente find($id, $columns = ['*'])
 * @method Ponente first($columns = ['*'])
*/
class PonenteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'pais',
        'foto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ponente::class;
    }
}
