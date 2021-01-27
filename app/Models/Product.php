<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = ['name', 'image', 'price', 'decsription', 'category_id', 'created_at', 'updated_at'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function orders(){
        return $this->hasMany(Order::class, 'product_id', 'id');
    }

    public function carts(){
        return $this->hasMany(Cart::class, 'product_id', 'id');
    }
}
