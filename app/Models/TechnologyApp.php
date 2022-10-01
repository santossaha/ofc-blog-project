<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TechnologyApp extends Model
{
	use SoftDeletes;

	protected $table = 'technology_apps';

    protected $fillable = [
        'technology_id','title', 'description','alt_image','image','type',
    ];
}
