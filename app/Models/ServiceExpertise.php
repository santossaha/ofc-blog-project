<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceExpertise extends Model
{
    protected $fillable=['service_id', 'title', 'description', 'image', 'alt_image'];
}
