<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Blog extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'title','description','meta_title','meta_keyword','meta_description','image','front_image','publish_date', 'publish_by','slug', 'status','meta_robots', 'front_image_title', 'front_image_alt', 'image_title', 'image_alt', 'blog_views'
    ];

    public function categories(){
    	return $this->belongsToMany(BlogCategory::class,'bolg_category_multis','blog_id', 'category_id');
    }
    protected $hidden=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * @param $query
     * @return mixed
     */
 /*   public function scopeActive($query)
    {
        return $query->where('status', '=', 1);
    }*/


}
