<?php

namespace App\Repositories;

use App\Models\Estudante;
use App\Repositories\BaseRepository;

/**
 * Class EstudanteRepository
 * @package App\Repositories
 * @version June 6, 2019, 2:12 pm UTC
*/

class EstudanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'nome',
        'genero',
        'data_nascimento',
        'nome_encarregado',
        'telefone'
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
        return Estudante::class;
    }
}
