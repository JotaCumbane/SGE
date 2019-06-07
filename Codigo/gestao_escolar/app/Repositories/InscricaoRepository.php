<?php

namespace App\Repositories;

use App\Models\Inscricao;
use App\Repositories\BaseRepository;

/**
 * Class InscricaoRepository
 * @package App\Repositories
 * @version June 6, 2019, 2:12 pm UTC
*/

class InscricaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo_estudante',
        'disciplina',
        'data_inscricao'
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
        return Inscricao::class;
    }
}
