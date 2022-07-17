<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    use HasFactory;
    protected $table = 'size';
    public function product(){
        return $this->belongsTo(product::class, 'id_product', 'id');
    }
    public $timestamps = false;
}
