<?php

namespace App\Repositories;

use App\Models\Clientes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClientesRepository
 * @package App\Repositories
 * @version March 20, 2019, 7:23 pm UTC
 *
 * @method Clientes findWithoutFail($id, $columns = ['*'])
 * @method Clientes find($id, $columns = ['*'])
 * @method Clientes first($columns = ['*'])
*/
class ClientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellidos',
        'telefono'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Clientes::class;
    }
}
