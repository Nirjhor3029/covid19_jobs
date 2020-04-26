<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Giver
 * @package App\Models
 * @version April 26, 2020, 7:58 am UTC
 *
 * @property \App\Models\Area $area
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property integer $area_id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $nid
 */
class Giver extends Model
{
    use SoftDeletes;

    public $table = 'givers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'area_id',
        'name',
        'phone',
        'email',
        'nid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'area_id' => 'integer',
        'name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'nid' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'area_id' => 'required',
        'name' => 'required',
        'phone' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function area()
    {
        return $this->belongsTo(\App\Models\Area::class, 'area_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
