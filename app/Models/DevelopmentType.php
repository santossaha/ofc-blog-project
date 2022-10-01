<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class DevelopmentType extends Model
{
    use SoftDeletes;

    protected $table = 'development_type';
    protected $fillable = [
        'name',
        'status',
    ];
}
