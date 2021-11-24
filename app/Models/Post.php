<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Shetabit\Visitor\Traits\Visitable;

/**
 * Class Post
 * @package App\Models
 * @version September 9, 2021, 7:28 am UTC
 *
 * @property string $name
 * @property string $slug
 * @property string $discription
 * @property string $body
 * @property integer $status
 * @property integer $hit
 * @property tinyinteger $user_id
 * @property string $image
 */
class Post extends Model
{
    use SoftDeletes;
    use Visitable;
    use HasFactory;

    public $table = 'posts';


    protected $dates = ['deleted_at'];

    protected $attributes = [
        'hit' => 1,
        'user_id' => 2
    ];

    public $fillable = [
        'name',
        'slug',
        'discription',
        'body',
        'status',
        'hit',
        'user_id',
        'commodity_id',
        'color',
        'status_commodity',
        'product_type',
        'price',
        'price_2',
        'dimensions',
        'weight',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'slug' => 'string',
        'discription' => 'string',
        'body' => 'string',
        'status' => 'integer',
        'dimensions' => 'string',
        'weight' => 'integer',
        'hit' => 'integer',
        'commodity_id' => 'integer',
        'product_type' => 'integer',
        'color' => 'string',
        'status_commodity' => 'integer',
        'price' => 'string',
        'price_2' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'slug' => 'required',
        'discription' => 'required',
        'body' => 'required',
        'image' => 'required',
        'commodity_id' => 'required',
        'product_type' => 'required',
        'color' => 'required',
        'status_commodity' => 'required',
        'price' => 'required',
        'price_2' => 'required',
        'dimensions' => 'required',
        'weight' => 'required'
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
       return $this->belongsToMany(Tag::class);
    }
    public function user(){
        return $this->belongsTo(Post::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
