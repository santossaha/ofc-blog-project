<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PortfolioCategory extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'status','sort_name',
    ];

    public function portfolios() {
        return $this->hasMany(Portfolio::class, 'portfolio_id', 'id')->where('status','active');
    }
}
