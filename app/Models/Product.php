<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'merk_id',
        'nama',
        'harga',
        'deskripsi',

    ];

    public function merk()
    {
        return $this->belongsTo(Merk::class);
    }
}
