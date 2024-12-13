<?php


    

    

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aktivitas;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class aktivitasController extends Controller
{
    public function index()
    {
        $reguler = \App\Models\Aktivitas::where('tipe', 'Reguler')->orderBy('urutan')->get();
        $halfDay = \App\Models\Aktivitas::where('tipe', 'Half Day')->orderBy('urutan')->get();
        $fullDay = \App\Models\Aktivitas::where('tipe', 'Full Day')->orderBy('urutan')->get();

        return view('user.aktivitas', compact('reguler', 'halfDay', 'fullDay'));
    }

    public function indexAdmin()
    {
        // $aktivitass = aktivitas::all();
        // return view('admin.guru.guru', compact('aktivitass'));

        $reguler = \App\Models\Aktivitas::where('tipe', 'Reguler')->orderBy('urutan')->get();
        $halfDay = \App\Models\Aktivitas::where('tipe', 'Half Day')->orderBy('urutan')->get();
        $fullDay = \App\Models\Aktivitas::where('tipe', 'Full Day')->orderBy('urutan')->get();

        return view('admin.aktivitas.aktivitas', compact('reguler', 'halfDay', 'fullDay'));
    }

    public function create()
    {
        return view('admin.aktivitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tipe' => 'required|string',
        ]);
        
        Aktivitas::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tanggal_bergabung' => $request->tanggal_bergabung,
            'keterangan' => $request->keterangan,
            'photo' => $path,
        ]);
        

        return redirect()->route('admin.guru.index')->with('success', 'Aktivitas berhasil ditambahkan.');
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
        $aktivitas = Aktivitas::findOrFail($id);
        return view('admin.guru.edit', compact('aktivitas'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $aktivitas = Aktivitas::findOrFail($id);

        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'tanggal_bergabung' => 'required|date',
            'keterangan' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil semua data kecuali foto
        $data = $request->except(['photo']);

        // Jika ada file foto yang diunggah
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($aktivitas->photo && Storage::disk('public')->exists($aktivitas->photo)) {
                Storage::disk('public')->delete($aktivitas->photo);
            }
            
            $filePath = public_path('storage/' . $aktivitas->photo);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            

            // Simpan foto baru
            $path = $request->file('photo')->store('aktivitass', 'public');
            File::copy(storage_path('app/public/' . $path), public_path('storage/' . $path));
            $data['photo'] = $path; // Tambahkan path foto baru ke array data
        }

        // Update data guru
        $aktivitas->update($data);

        // Redirect ke halaman daftar guru dengan pesan sukses
        return redirect()->route('admin.guru.index')->with('success', 'Data updated successfully');
    }




    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        // Cari aktivitas berdasarkan ID
        $aktivitas = Aktivitas::findOrFail($id);

        // Tentukan path file berdasarkan nama yang disimpan di database
        $filePath = public_path('storage/' . $aktivitas->photo);

        if ($aktivitas->photo && Storage::disk('public')->exists($aktivitas->photo)) {
            Storage::disk('public')->delete($aktivitas->photo);
        }

        // Hapus file jika ada
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        // Hapus data aktivitas dari database
        $aktivitas->delete();

        return redirect()->route('admin.guru.index')->with('success', 'Aktivitas berhasil dihapus!');
    }

    public function destroyPhoto($id)
    {
        $aktivitas = Aktivitas::findOrFail($id);

        // Hapus foto dari storage jika ada
        // if ($aktivitas->photo && Storage::disk('public')->exists($aktivitas->photo)) {
        //     Storage::disk('public')->delete($aktivitas->photo);
        // }
        $filePath = public_path('storage/' . $aktivitas->photo);

        if ($aktivitas->photo && Storage::disk('public')->exists($aktivitas->photo)) {
            Storage::disk('public')->delete($aktivitas->photo);
        }

        // Hapus file jika ada
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        // Set kolom photo menjadi null
        $aktivitas->update(['photo' => null]);

        return redirect()->route('admin.guru.edit', $id)->with('success', 'Foto berhasil dihapus.');
    }




}
    


