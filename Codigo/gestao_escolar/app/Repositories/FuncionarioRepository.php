<?php

namespace App\Repositories;

use App\Models\Funcionario;
use App\Repositories\BaseRepository;

/**
 * Class FuncionarioRepository
 * @package App\Repositories
 * @version June 6, 2019, 2:11 pm UTC
*/

class FuncionarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'apelido',
        'genero'
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
        return Funcionario::class;
    }
}
