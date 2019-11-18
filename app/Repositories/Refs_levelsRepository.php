<?php

namespace App\Repositories;

use App\Models\Refs_levels;
use App\Repositories\BaseRepository;

/**
 * Class Refs_levelsRepository
 * @package App\Repositories
 * @version November 14, 2019, 3:59 am UTC
*/

class Refs_levelsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'reward',
        'CongraturatoryMessage',
        'TargetRefferals',
        'target_per_referal'
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
        return Refs_levels::class;
    }
}
