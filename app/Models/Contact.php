<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'spam',
        'email',
        'phone',
        'website',
        'company_name',
        'company_year',
        'project_type',
        'project_description',
        'country_code',
        'file',
        'marketing_tips',
        'skype_id',
        'country',
        'ip_address',
        'type'
    ];
}
