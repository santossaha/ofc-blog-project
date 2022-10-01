<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Page extends Model
{
	use SoftDeletes;

    protected $fillable=[
        'title','slug','meta_title','meta_keyword','meta_description','meta_robots','status'
    ];

    protected $hidden=[
        'deleted_at','created_at','updated_at'
    ];
}
