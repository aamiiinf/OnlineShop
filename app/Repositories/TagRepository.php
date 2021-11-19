<?php

namespace App\Repositories;

use App\Models\Tag;
use App\Repositories\BaseRepository;

/**
 * Class TagRepository
 * @package App\Repositories
 * @version September 21, 2021, 9:08 am UTC
*/

class TagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'name',
        'discription',
        'role_tags',
        'status'
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
        return Tag::class;
    }
}
