<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class merkController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required|unique:merks,merk',
        ],
        [
            'merk.required' => 'Merk harus diisi',
            'merk.unique' => 'Merk sudah ada',
        ]);
        $merk = new Merk();
        $merk->merk = $request->merk;
        $merk->save();
        return redirect()->back()->with('success', 'Merk berhasil ditambahkan');
    }
}
