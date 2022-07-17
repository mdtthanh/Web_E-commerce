<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thumbnails_detail extends Model
{
    use HasFactory;
    protected $table = 'thumbnails_detail';
    public $timestamps = false;
    public function product(){
        return $this->belongsTo(product::class, 'id_product', 'id');
    }
}
