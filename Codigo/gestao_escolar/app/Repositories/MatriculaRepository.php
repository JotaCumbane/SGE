<?php

namespace App\Repositories;

use App\Models\Matricula;
use App\Repositories\BaseRepository;

/**
 * Class MatriculaRepository
 * @package App\Repositories
 * @version June 6, 2019, 2:12 pm UTC
*/

class MatriculaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo_estudante',
        'data_matricula',
        'estado'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Matricula::class;
    }
}
