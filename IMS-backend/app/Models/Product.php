<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'cat_id',
        'user_id',
        'unit',
        'name',
        'stock_quantity',
        'description'
    ];


    public function categories()
    {
        return $this->belongsT(Category::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
