<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PortfolioSolution extends Model
{
    protected $table = 'portfolio_solutions';
	use SoftDeletes;

    protected $fillable = [
        'portfolio_id',
        'title',
        'description',
        'type',
        'image',
        'alt_tag',
    ];
}
