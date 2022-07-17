<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    public function category(){
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
    public function thumbnails_detail(){
        return $this->hasMany(thumbnails_detail::class, 'id_product', 'id');
    }
    public function size(){
        return $this->hasMany(size::class, 'id_product', 'id');
    }
    public function orderdetail(){
        return $this->hasMany(orderdetail::class, 'id_product', 'id');
    }
}
