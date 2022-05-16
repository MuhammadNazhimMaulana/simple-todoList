<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    // Fillable
    protected $fillable = ['category_id', 'name', 'description', 'content', 'owner_name','created_at', 'updated_at', 'deleted_at'];
}
