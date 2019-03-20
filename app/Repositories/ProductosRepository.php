<?php

namespace App\Repositories;

use App\Models\Productos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductosRepository
 * @package App\Repositories
 * @version March 20, 2019, 7:26 pm UTC
 *
 * @method Productos findWithoutFail($id, $columns = ['*'])
 * @method Productos find($id, $columns = ['*'])
 * @method Productos first($columns = ['*'])
*/
class ProductosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Productos::class;
    }
}
