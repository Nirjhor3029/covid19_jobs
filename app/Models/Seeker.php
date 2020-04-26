<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Seeker
 * @package App\Models
 * @version April 26, 2020, 9:33 am UTC
 *
 * @property \App\Models\Area $area
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property integer $area_id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $nid
 * @property number $per_day_income
 * @property integer $previous_experience
 * @property integer $willingness_to_travel
 * @property integer $group_id
 */
class Seeker extends Model
{
    use SoftDeletes;

    public $table = 'seekers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'area_id',
        'name',
        'phone',
        'email',
        'nid',
        'per_day_income',
        'previous_experience',
        'willingness_to_travel',
        'group_id'
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
        'nid' => 'string',
        'per_day_income' => 'float',
        'previous_experience' => 'integer',
        'willingness_to_travel' => 'integer',
        'group_id' => 'integer'
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
        'phone' => 'required',
        'group_id' => 'required'
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
