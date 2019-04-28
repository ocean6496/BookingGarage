<?php

namespace App\Repositories;

use App\Models\Garage;
use App\Repositories\BaseRepository;

/**
 * Class GarageRepository
 * @package App\Repositories
 * @version April 4, 2019, 4:31 pm UTC
*/

class GarageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'address',
        'phone',
        'proprietor'
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
        return Garage::class;
    }
}
