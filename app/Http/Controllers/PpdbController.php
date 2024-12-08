<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'birthplace' => 'required|string|max:255',
            'parent_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string'
        ]);

        $ppdb = Ppdb::create([
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('gender') === 'male' ? 'Laki-laki' : 'Perempuan',
            'tempat_lahir' => $request->input('birthplace'),
            'nama_orang_tua' => $request->input('parent_name'),
            'no_telepon' => '+62' . $request->input('phone'),
            'alamat' => $request->input('address')
        ]);

        return redirect()->back()->with('success', 'Pendaftaran berhasil!');
    }
}