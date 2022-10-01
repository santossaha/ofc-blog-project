<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceFeature extends Model
{
    use SoftDeletes;
    protected $fillable=['service_id', 'title', 'description', 'image', 'alt_image'];
    // public function features() {
    //     return $this->hasMany(Service::class,'service_id'); //->where('type','service');
    // }
}
