<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Inscricao
 * @package App\Models
 * @version June 6, 2019, 2:12 pm UTC
 *
 * @property integer codigo_estudante
 * @property string disciplina
 * @property string data_inscricao
 */
class Inscricao extends Model
{
    use SoftDeletes;

    public $table = 'inscricoes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo_estudante',
        'disciplina',
        'data_inscricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo_estudante' => 'integer',
        'disciplina' => 'string',
        'data_inscricao' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo_estudante' => 'required',
        'disciplina' => 'required',
        'data_inscricao' => 'required'
    ];

    
}
