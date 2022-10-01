<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technology extends Model
{
	use SoftDeletes;

	protected $table = 'technologies';

    protected $fillable = [
        'title',
        'short_title',
        'short_description',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'slug',
        'status',
        'image',
        'about_title',
        'about_image',
        'about_description',
        'app_dev_title',
        'hire_us_title',
        'stories_title',
        'customer_title',
        'insight_title',
        'meta_robots'
    ];

    public function service_point() {
        return $this->hasMany(TechnologyApp::class)->where('type','technology_service');
    }

    public function app_development() {
        return $this->hasMany(TechnologyApp::class)->where('type','technology_app');
    }

    public function faq(){
        return $this->hasMany(Faq::class,'type_id')->where('type','technology');
    }

    public function expertise(){
        return $this->hasMany(TechnologyExpertise::class,'technology_id');
    }
    protected $hidden=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
