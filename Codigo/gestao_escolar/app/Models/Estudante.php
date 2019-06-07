<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estudante
 * @package App\Models
 * @version June 6, 2019, 2:12 pm UTC
 *
 * @property integer codigo
 * @property string nome
 * @property string genero
 * @property string data_nascimento
 * @property string nome_encarregado
 * @property integer telefone
 */
class Estudante extends Model
{
    use SoftDeletes;

    public $table = 'estudantes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'nome',
        'genero',
        'data_nascimento',
        'nome_encarregado',
        'telefone'
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
        'genero' => 'string',
        'data_nascimento' => 'date',
        'nome_encarregado' => 'string',
        'telefone' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'nome' => 'required',
        'genero' => 'required',
        'data_nascimento' => 'required',
        'nome_encarregado' => 'required',
        'telefone' => 'required'
    ];

    
}
