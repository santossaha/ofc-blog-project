<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TechnologyExpertise extends Model
{
    use SoftDeletes;
    protected $table = 'technology_expertises';

    protected $fillable = [
        'technology_id',
        'title',
        'image',
    ];
}
