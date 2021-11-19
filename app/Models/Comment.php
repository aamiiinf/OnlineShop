<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Comment
 * @package App\Models
 * @version September 26, 2021, 6:59 am UTC
 *
 * @property integer $post_id
 * @property string $body
 * @property string $name
 * @property string $email
 * @property tinyInteger $status
 */
class Comment extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'comments';


    protected $dates = ['deleted_at'];

    public $fillable = [
        'post_id',
        'body',
        'name',
        'email',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'post_id' => 'integer',
        'body' => 'string',
        'name' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'body' => 'required',
        'name' => 'required',
        'email' => 'required'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
