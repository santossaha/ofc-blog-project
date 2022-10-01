<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title', 'slug', 'icon', 'icon_alt_tag', 'about_description', 'about_title', 'about_image', 'image2_alt_tag', 'app_process_image', 'image_alt_tag', 'status', 'home_description', 'short_description', 'benefit_head_title','benefit_head_description','feature_head_title','hire_head_title', 'hire_head_description', 'meta_title', 'meta_keyword', 'meta_description', 'meta_robots'
    ];
    protected $hidden=[
        'created_at','updated_at','deleted_at'
    ];

    function faqs(){
       return $this->hasMany(Faq::class,'type_id','id')->where('type','service');
    }

    function serviceAppes(){
        return $this->hasMany(ServiceApp::class,'service_id','id');
    }

    function serviceFeatures(){
        return $this->hasMany(ServiceFeature::class,'service_id','id');
    }

    function serviceExpertises(){
        return $this->hasMany(ServiceExpertise::class,'service_id','id');
    }

    function serviceBenefits(){
        return $this->hasMany(ServiceBenefit::class,'service_id','id');
    }
}
