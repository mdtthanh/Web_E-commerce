<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    use HasFactory;
    protected $table = 'orderdetail';
    protected $fillable = ['product_id', 'price', 'id', 'size', 'total_money', 'order_id'];
    public $timestamps = false;
    public function product(){
        return $this->belongsTo(product::class, 'id_product', 'id');
    }

    public function order(){
        return $this->belongsTo(category::class, 'order_id', 'id');
    }
}
