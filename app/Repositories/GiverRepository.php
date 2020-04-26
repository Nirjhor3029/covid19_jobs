<?php

namespace App\Repositories;

use App\Models\Giver;
use App\Repositories\BaseRepository;

/**
 * Class GiverRepository
 * @package App\Repositories
 * @version April 26, 2020, 7:58 am UTC
*/

class GiverRepository extends BaseRepository
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
        'nid'
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
        return Giver::class;
    }
}
