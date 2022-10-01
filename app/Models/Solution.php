<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solution extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'title',
        'sub_title',
        'home_description',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'meta_robots',
        'slug',
        'image',
        'about_image',
        'video',
        'about_description',
        'second_title',
        'second_description',
        'feature_title',
        'customer_title',
        'solution_list_title',
        'status',
    ];

    public function screenshots() {
        return $this->hasMany(SolutionScreenshot::class);
    }
    public function solutions() {
        return $this->hasMany(PortfolioSolution::class,'portfolio_id')->where('type','solution');
    }
    public function feature_list() {
        return $this->hasMany(FeatureList::class);
    }

    public function faq(){
        return $this->hasMany(Faq::class,'type_id')->where('type','solution');
    }


    public function solution_technology(){
        return $this->belongsToMany(TechnologyType::class,'solution_technologies','solution_id', 'technology_id');
    }
}
