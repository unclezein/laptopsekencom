<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{

    protected $fillable = [
        'merk',
    ];

    // product
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
