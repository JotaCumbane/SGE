<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Funcionario
 * @package App\Models
 * @version June 6, 2019, 2:11 pm UTC
 *
 * @property string nome
 * @property string apelido
 * @property string genero
 */
class Funcionario extends Model
{
    use SoftDeletes;

    public $table = 'funcionarios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'apelido',
        'genero'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'apelido' => 'string',
        'genero' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'apelido' => 'required',
        'genero' => 'required'
    ];

    
}
