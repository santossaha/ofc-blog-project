<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TechnologyType extends Model
{
	//use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function screenshots() {
        return $this->hasMany(PortfolioScreenshot::class);
    }
    public function solutions() {
        return $this->hasMany(PortfolioSolution::class);
    }

    public function category(){
        return $this->belongsTo(PortfolioCategory::class,'portfolio_category_id');
    }
}
