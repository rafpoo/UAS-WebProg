<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ppdb;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $ppdbs = PPDB::all();

    //     // Kirim data ke view
    //     return view('admin.ppdb.ppdb', compact('ppdbs'));
    // }
    public function index(Request $request)
    {
        // Ambil query pencarian dari input user
        $search = $request->get('search');

        // Jika ada query pencarian, filter data
        if ($search) {
            $ppdbs = PPDB::where('nama', 'like', "%$search%")
                ->orWhere('tempat_lahir', 'like', "%$search%")
                ->orWhere('tanggal_lahir', 'like', "%$search%")
                ->orWhere('alamat', 'like', "%$search%")
                ->orWhere('nama_ayah', 'like', "%$search%")
                ->orWhere('no_telepon_ayah', 'like', "%$search%")
                ->orWhere('nama_ibu', 'like', "%$search%")
                ->orWhere('no_telepon_ibu', 'like', "%$search%")
                ->paginate(20);
        } else {
            // Jika tidak ada pencarian, ambil semua data
            $ppdbs = PPDB::paginate(20);
        }

        // Kirim data ke view
        return view('admin.ppdb.ppdb', compact('ppdbs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'nama_ayah' => 'required|string|max:255',
            'no_telepon_ayah' => 'required|string|max:15',
            'nama_ibu' => 'required|string|max:255',
            'no_telepon_ibu' => 'string|max:15',
            'alamat' => 'required|string',
        ]);

        // Simpan data ke database
        Ppdb::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pendaftaran berhasil!');
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
        // Cari data berdasarkan ID
        $ppdb = PPDB::findOrFail($id);

        // Kirim data ke view
        return view('admin.ppdb.edit', compact('ppdb'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255', // Pastikan jenis_kelamin sesuai dengan tipe data
            'tempat_lahir' => 'required|string|max:255',  // Tambahkan aturan validasi lainnya sesuai kebutuhan
            'tanggal_lahir' => 'required|date',
            'nama_ayah' => 'required|string|max:255',
            'no_telepon_ayah' => 'required|string|max:15',
            'nama_ibu' => 'required|string|max:255',
            'no_telepon_ibu' => 'string|max:15',
            'alamat' => 'required|string|max:255',
        ]);

        // Cari data berdasarkan ID dan update
        $ppdb = PPDB::findOrFail($id);
        $ppdb->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ayah' => $request->nama_ayah,
            'no_telepon_ayah' => $request->no_telepon_ayah,
            'nama_ibu' => $request->nama_ibu,
            'no_telepon_ibu' => $request->no_telepon_ibu,
            'alamat' => $request->alamat,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('ppdb.index')->with('success', 'Data berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Hapus data berdasarkan ID
        $ppdb = PPDB::findOrFail($id);
        $ppdb->delete();

        // Redirect kembali ke halaman index dengan pesan
        return redirect()->route('ppdb.index')->with('success', 'Data berhasil dihapus.');
    }
}
