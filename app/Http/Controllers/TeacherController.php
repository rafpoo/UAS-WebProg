<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('user.guru', compact('teachers'));
    }

    public function indexAdmin()
    {
        $teachers = Teacher::all();
        return view('admin.guru.guru', compact('teachers'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'tanggal_bergabung' => 'required|date',
            'keterangan' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $path = $request->file('photo')->store('teachers', 'public');
        File::copy(storage_path('app/public/' . $path), public_path('storage/' . $path));
        
        Teacher::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tanggal_bergabung' => $request->tanggal_bergabung,
            'keterangan' => $request->keterangan,
            'photo' => $path,
        ]);
        

        return redirect()->route('admin.guru.index')->with('success', 'Teacher berhasil ditambahkan.');
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
        $teacher = Teacher::findOrFail($id);
        return view('admin.guru.edit', compact('teacher'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

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
            if ($teacher->photo && Storage::disk('public')->exists($teacher->photo)) {
                Storage::disk('public')->delete($teacher->photo);
            }
            
            $filePath = public_path('storage/' . $teacher->photo);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            

            // Simpan foto baru
            $path = $request->file('photo')->store('teachers', 'public');
            File::copy(storage_path('app/public/' . $path), public_path('storage/' . $path));
            $data['photo'] = $path; // Tambahkan path foto baru ke array data
        }

        // Update data guru
        $teacher->update($data);

        // Redirect ke halaman daftar guru dengan pesan sukses
        return redirect()->route('admin.guru.index')->with('success', 'Data updated successfully');
    }




    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        // Cari teacher berdasarkan ID
        $teacher = Teacher::findOrFail($id);

        // Tentukan path file berdasarkan nama yang disimpan di database
        $filePath = public_path('storage/' . $teacher->photo);

        if ($teacher->photo && Storage::disk('public')->exists($teacher->photo)) {
            Storage::disk('public')->delete($teacher->photo);
        }

        // Hapus file jika ada
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        // Hapus data teacher dari database
        $teacher->delete();

        return redirect()->route('admin.guru.index')->with('success', 'Teacher berhasil dihapus!');
    }

    public function destroyPhoto($id)
    {
        $teacher = Teacher::findOrFail($id);

        // Hapus foto dari storage jika ada
        // if ($teacher->photo && Storage::disk('public')->exists($teacher->photo)) {
        //     Storage::disk('public')->delete($teacher->photo);
        // }
        $filePath = public_path('storage/' . $teacher->photo);

        if ($teacher->photo && Storage::disk('public')->exists($teacher->photo)) {
            Storage::disk('public')->delete($teacher->photo);
        }

        // Hapus file jika ada
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        // Set kolom photo menjadi null
        $teacher->update(['photo' => null]);

        return redirect()->route('admin.guru.edit', $id)->with('success', 'Foto berhasil dihapus.');
    }




}
