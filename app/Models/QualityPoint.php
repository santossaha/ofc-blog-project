<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualityPoint extends Model
{
    protected $table = 'quality_points';
    protected $fillable = [
        'service_id','title','description','alt_image','image'
    ];
}
