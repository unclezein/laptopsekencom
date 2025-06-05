<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Merk;

use Illuminate\Http\Request;

class adminPageController extends Controller
{
    public function dashboard()
    {
        $products = Product::all();
        $merks = Merk::all();
        return view('admin.index', compact('products', 'merks'));
    }
}
