<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;


    protected $fillable = [
        'name',
        'descripton',
        'status'
    ];


    public function order_products()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
