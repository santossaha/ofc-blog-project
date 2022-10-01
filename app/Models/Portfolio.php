<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use SoftDeletes;

    protected $table = 'portfolios';

    protected $fillable = [
        'portfolio_category_id',
        'title',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'meta_robots',
        'slug',
        'image',
        'about_image',
        'about_description',
        'challenges_description',
        'platform',
        'language',
        'db',
        'tools',
        'status',
        'alt_tag',
    ];

    public function screenshots()
    {
        return $this->hasMany(PortfolioScreenshot::class);
    }
    public function solutions()
    {
        return $this->hasMany(PortfolioSolution::class);
    }

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }
}
