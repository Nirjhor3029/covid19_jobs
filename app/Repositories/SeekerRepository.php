<?php

namespace App\Repositories;

use App\Models\Seeker;
use App\Repositories\BaseRepository;

/**
 * Class SeekerRepository
 * @package App\Repositories
 * @version April 26, 2020, 9:33 am UTC
*/

class SeekerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Seeker::class;
    }
}
