<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceApp extends Model
{
    use SoftDeletes;
    protected $fillable =['service_id', 'short_title','title','image','description','type','alt_image'];

}
