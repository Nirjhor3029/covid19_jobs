<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Area
 * @package App\Models
 * @version April 26, 2020, 7:35 am UTC
 *
 * @property integer $upazilla_id
 * @property string $name
 * @property string $bn_name
 * @property string $url
 */
class Area extends Model
{
    use SoftDeletes;

    public $table = 'areas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'upazilla_id',
        'name',
        'bn_name',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'upazilla_id' => 'integer',
        'name' => 'string',
        'bn_name' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'upazilla_id' => 'required',
        'name' => 'required',
        'url' => 'required'
    ];

    
}
