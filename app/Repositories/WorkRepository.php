<?php

namespace App\Repositories;

use App\Models\Work;
use App\Repositories\BaseRepository;

/**
 * Class WorkRepository
 * @package App\Repositories
 * @version October 2, 2021, 7:25 am UTC
*/

class WorkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'work'
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
        return Work::class;
    }
}
