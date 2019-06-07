<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Professor
 * @package App\Models
 * @version June 6, 2019, 2:11 pm UTC
 *
 * @property integer codigo
 * @property string nome
 * @property string sexo
 * @property string data_nascimento
 * @property string formacao
 * @property integer telefone
 * @property string morada
 */
class Professor extends Model
{
    use SoftDeletes;

    public $table = 'professores';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'nome',
        'sexo',
        'data_nascimento',
        'formacao',
        'telefone',
        'morada'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo' => 'integer',
        'nome' => 'string',
        'sexo' => 'string',
        'data_nascimento' => 'date',
        'formacao' => 'string',
        'telefone' => 'integer',
        'morada' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'nome' => 'required',
        'sexo' => 'required',
        'data_nascimento' => 'required',
        'formacao' => 'required',
        'telefone' => 'required',
        'morada' => 'required'
    ];

    
}
