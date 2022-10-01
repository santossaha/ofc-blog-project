<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SolutionScreenshot extends Model
{
	//use SoftDeletes;

    protected $fillable = [
        'solution_id',
        'title',
        'description',
        'image',
    ];
}
