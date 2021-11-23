<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Category
 * @package App\Models
 * @version September 19, 2021, 5:58 am UTC
 *
 * @property string $name
 * @property string $slug
 * @property integer $status
 */
class Category extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categories';


    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'slug',
        'status',
        'parent_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'slug' => 'required'
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function posts()
    {
        return $this->belongsToMany(post::class);
    }
}
