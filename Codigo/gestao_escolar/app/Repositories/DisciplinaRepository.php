<?php

namespace App\Repositories;

use App\Models\Disciplina;
use App\Repositories\BaseRepository;

/**
 * Class DisciplinaRepository
 * @package App\Repositories
 * @version June 6, 2019, 2:08 pm UTC
*/

class DisciplinaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descricao'
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
        return Disciplina::class;
    }
}
