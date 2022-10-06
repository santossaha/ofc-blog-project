<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'short_description',
        'slug',
        'about_description',
        'about_image',
        'about_title',
        'app_process_image',
        'status',
        'is_show',
        'app_dev_title',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'meta_robots'
    ];

    public function servicePoint(){
        return $this->hasMany(ServiceApp::class)->where('type','service');
    }

    public function devPoint(){
        return $this->hasMany(ServiceApp::class)->where('type','service_app');
    }

    function faqs(){
       return $this->hasMany(Faq::class,'type_id','id')->where('type','service');
    }

    protected $hidden=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];


}
