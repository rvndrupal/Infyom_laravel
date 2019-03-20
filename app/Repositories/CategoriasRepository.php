<?php

namespace App\Repositories;

use App\Models\Categorias;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CategoriasRepository
 * @package App\Repositories
 * @version March 20, 2019, 7:36 pm UTC
 *
 * @method Categorias findWithoutFail($id, $columns = ['*'])
 * @method Categorias find($id, $columns = ['*'])
 * @method Categorias first($columns = ['*'])
*/
class CategoriasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'foto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Categorias::class;
    }
}
