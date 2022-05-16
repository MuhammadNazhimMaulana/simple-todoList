<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Fillable
    protected $fillable = ['name', 'created_at', 'updated_at', 'deleted_at'];
    
}
