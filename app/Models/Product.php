<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cartItems()   // 關係函數應使用小駝峰的命名方式，非蛇底方式
    {
        return $this->hasMany(CartItem::class);
    }

    public function orderItems()  // 關係函數應使用小駝峰的命名方式，非蛇底方式
    {
        return $this->hasMany(OrderItem::class);
    }
}
