<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Matricula
 * @package App\Models
 * @version June 6, 2019, 2:12 pm UTC
 *
 * @property integer codigo_estudante
 * @property string data_matricula
 * @property boolean estado
 */
class Matricula extends Model
{
    use SoftDeletes;

    public $table = 'matriculas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo_estudante',
        'data_matricula',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo_estudante' => 'integer',
        'data_matricula' => 'date',
        'estado' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo_estudante' => 'required',
        'data_matricula' => 'required',
        'estado' => 'required'
    ];

    
}
