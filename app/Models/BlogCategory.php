<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BlogCategory extends Model
{
	use SoftDeletes;

    protected $fillable =['name','slug','meta_title','meta_description','status'];

    public function scopeActive($query)
    {
        return $query->where('status', '=', 1);
    }

}
