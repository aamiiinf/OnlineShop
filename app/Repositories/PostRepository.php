<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * Class PostRepository
 * @package App\Repositories
 * @version September 9, 2021, 7:28 am UTC
*/

class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'discription',
        'body',
        'status',
        'hit',
        'user_id',
        'image',
        'commodity_id',
        'color',
        'status_commodity',
        'product_type',
        'price',
        'price_2',
        'dimensions',
        'weight'
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
        return Post::class;
    }
    public function createPost(Request $request)
    {
        $file = $request->file('image');
        $originalName = $file->getClientOriginalName();
        $exception = $file->getClientOriginalExtension();

        $path = 'upload/'.uniqid().'.'.$exception;
        $img = Image::make($file);
        $img->save(public_path($path));

        $input = $request->all();
        $input['image'] = $path;

        return $this->create($input);
    }
}
