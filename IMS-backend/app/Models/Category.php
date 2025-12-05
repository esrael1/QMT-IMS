<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'cat_id',
        'name',
        'description',
    ];

    // Parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    // Child categories
    public function children()
    {
        return $this->hasMany(Category::class, 'cat_id');
    }
}
