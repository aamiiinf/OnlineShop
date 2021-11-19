<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Work
 * @package App\Models
 * @version October 2, 2021, 7:25 am UTC
 *
 * @property string $title
 * @property integer $work
 */
class Work extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'works';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'work'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'work' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    
}
