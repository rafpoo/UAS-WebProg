<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('user.aktivitas', compact('ekstrakurikulers'));
    }

    public function indexAdmin()
    {
        $ekstrakurikulers = Ekstrakurikuler::all();
        return view('admin.aktivitas.aktivitas', compact('ekstrakurikulers'));
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $path = $request->file('image')->store('ekstrakurikulers', 'public');
        File::copy(storage_path('app/public/' . $path), public_path('storage/' . $path));
        
        Ekstrakurikuler::create([
            'nama' => $request->nama,
            'image' => $path,
        ]);
        

        return redirect()->route('admin.aktivitas.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan.');
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
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);
        return view('admin.ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

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
            if ($ekstrakurikuler->image && Storage::disk('public')->exists($ekstrakurikuler->image)) {
                Storage::disk('public')->delete($ekstrakurikuler->image);
            }
            
            $filePath = public_path('storage/' . $ekstrakurikuler->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            

            // Simpan foto baru
            $path = $request->file('image')->store('ekstrakurikulers', 'public');
            File::copy(storage_path('app/public/' . $path), public_path('storage/' . $path));
            $data['image'] = $path; // Tambahkan path foto baru ke array data
        }

        // Update data ekstrakurikuler
        $ekstrakurikuler->update($data);

        // Redirect ke halaman daftar ekstrakurikuler dengan pesan sukses
        return redirect()->route('admin.aktivitas.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        // Cari ekstrakurikuler berdasarkan ID
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        // Tentukan path file berdasarkan nama yang disimpan di database
        $filePath = public_path('storage/' . $ekstrakurikuler->image);

        if ($ekstrakurikuler->image && Storage::disk('public')->exists($ekstrakurikuler->image)) {
            Storage::disk('public')->delete($ekstrakurikuler->image);
        }

        // Hapus file jika ada
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        // Hapus data ekstrakurikuler dari database
        $ekstrakurikuler->delete();

        return redirect()->route('admin.aktivitas.index')->with('success', 'Ekstrakurikuler berhasil dihapus!');
    }


}
