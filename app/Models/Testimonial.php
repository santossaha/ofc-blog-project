<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'short_title',
        'image',
        'status',
    ];

    /*public function getOldImageAttribute()
    {
        return $this->image;
    }*/

    /*public function getImageAttribute($value)
	{
	    if ($value) {
	        return asset('sitebucket/testimonial/'.$value);
	    } else {
	        return asset('front/images/avtar.png');
	    }
	}*/


    protected $hidden=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
