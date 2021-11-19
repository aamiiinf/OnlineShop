<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Hash;

/**
 * Class UserRepository
 * @package App\Repositories
*/

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'role',
        'status',
        'image'
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
        return User::class;
    }

    public function createUser(Request $request)
    { 
        $file = $request->file('image');
        $originalName = $file->getClientOriginalName();
        $exception = $file->getClientOriginalExtension();

        $path = 'upload/'.uniqid().'.'.$exception;
        $img = Image::make($file);
        $img->save(public_path($path));

        $input = $request->all();
        $input['image'] = $path;
        $input['password'] = Hash::make($input['password']);

        return $this->create($input);
    }
}
