<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = ['website_name','favicon_icon','logo','light_logo','email','meta_title','meta_description','meta_keyword'];
}
