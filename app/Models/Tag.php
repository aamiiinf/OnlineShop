<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Tag
 * @package App\Models
 * @version September 21, 2021, 9:08 am UTC
 *
 * @property string $title
 * @property string $name
 * @property string $discription
 * @property tinyInteger $role_tags
 * @property tinyInteger $status
 */
class Tag extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tags';


    protected $dates = ['deleted_at'];

    protected $attributes = [
        'role_tags' => 1
    ];

    public $fillable = [
        'title',
        'name',
        'discription',
        'role_tags',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'name' => 'string',
        'discription' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'name' => 'required',
        'discription' => 'required'
    ];

    public function posts()
    {
        return $this->belongsToMany(post::class);
    }
}
