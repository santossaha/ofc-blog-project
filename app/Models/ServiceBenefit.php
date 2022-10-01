<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBenefit extends Model
{
    protected $fillable=['service_id', 'title', 'description'];
}
