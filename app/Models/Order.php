<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['product_id', 'user_id', 'created_at', 'updated_at'];


    public function user(){

        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function prodcut(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
