<?php

namespace App\Repositories;

use App\Models\RefsCategory;
use App\Repositories\BaseRepository;

/**
 * Class RefsCategoryRepository
 * @package App\Repositories
 * @version November 14, 2019, 3:56 am UTC
*/

class RefsCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'user_id',
        'referal_count',
        'referal_visits',
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
        return RefsCategory::class;
    }
}
