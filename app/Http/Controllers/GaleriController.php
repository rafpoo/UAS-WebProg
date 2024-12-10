<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::all();
        return view('user.galeri', compact('galeris'));
    }

    public function indexAdmin()
    {
        $galeris = Galeri::all();
        return view('admin.galeri.galeri', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $path = $request->file('image')->store('galeris', 'public');
        File::copy(storage_path('app/public/' . $path), public_path('storage/' . $path));
        
        Galeri::create([
            'nama' => $request->nama,
            'image' => $path,
        ]);
        

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        // Validasi input
        $request->validate([
            'nama' => 'string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil semua data kecuali foto
        $data = $request->except(['image']);

        // Jika ada file foto yang diunggah
        if ($request->hasFile('image')) {
            // Hapus foto lama jika ada
            if ($galeri->image && Storage::disk('public')->exists($galeri->image)) {
                Storage::disk('public')->delete($galeri->image);
            }
            
            $filePath = public_path('storage/' . $galeri->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            

            // Simpan foto baru
            $path = $request->file('image')->store('galeris', 'public');
            File::copy(storage_path('app/public/' . $path), public_path('storage/' . $path));
            $data['image'] = $path; // Tambahkan path foto baru ke array data
        }

        // Update data galeri
        $galeri->update($data);

        // Redirect ke halaman daftar galeri dengan pesan sukses
        return redirect()->route('admin.galeri.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        // Cari galeri berdasarkan ID
        $galeri = Galeri::findOrFail($id);

        // Tentukan path file berdasarkan nama yang disimpan di database
        $filePath = public_path('storage/' . $galeri->image);

        if ($galeri->image && Storage::disk('public')->exists($galeri->image)) {
            Storage::disk('public')->delete($galeri->image);
        }

        // Hapus file jika ada
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        // Hapus data galeri dari database
        $galeri->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil dihapus!');
    }


}
