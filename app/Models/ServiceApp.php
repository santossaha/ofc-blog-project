<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceApp extends Model
{
    protected $fillable =['service_id', 'short_title','title','image','description','type','alt_image'];

}
