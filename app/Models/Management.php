<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;

    public $fillable = [
        'slider_mangement_1',
        'slider_mangement_2',
        'slider_mangement_3'
    ];
}
