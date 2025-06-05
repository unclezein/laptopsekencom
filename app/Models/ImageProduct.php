<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $table = 'image_product';
    protected $fillable = [
        'product_id',
        'image',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
