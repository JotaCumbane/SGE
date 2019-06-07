<?php

namespace App\Repositories;

use App\Models\Professor;
use App\Repositories\BaseRepository;

/**
 * Class ProfessorRepository
 * @package App\Repositories
 * @version June 6, 2019, 2:11 pm UTC
*/

class ProfessorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'nome',
        'sexo',
        'data_nascimento',
        'formacao',
        'telefone',
        'morada'
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
        return Professor::class;
    }
}
