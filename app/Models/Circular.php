<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circular extends Model
{
    use HasFactory;
    protected $fillable = ['c_name', 'category', 'requirment', 'vacency', 'job_type', 'address'];
}
