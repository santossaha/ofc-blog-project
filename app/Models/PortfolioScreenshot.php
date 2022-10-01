<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PortfolioScreenshot extends Model
{
	use SoftDeletes;
	protected $table = 'portfolio_screenshots';

    protected $fillable = [
        'portfolio_id',
        'image',
        'alt_tag',
    ];
}
