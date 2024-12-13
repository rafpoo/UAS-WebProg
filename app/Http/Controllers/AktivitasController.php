<?php


    

    

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aktivitas;
use App\Models\Ekstrakurikuler;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AktivitasController extends Controller
{
    public function index()
    {
        $reguler = Aktivitas::where('tipe', 'Reguler')->orderBy('urutan')->get();
        $halfDay = Aktivitas::where('tipe', 'Half Day')->orderBy('urutan')->get();
        $fullDay = Aktivitas::where('tipe', 'Full Day')->orderBy('urutan')->get();
        $ekstrakurikulers = Ekstrakurikuler::all();

        return view('user.aktivitas', compact('reguler', 'halfDay', 'fullDay', 'ekstrakurikulers'));
    }

    public function indexAdmin()
    {
        // $aktivitass = aktivitas::all();
        // return view('admin.aktivitas.aktivitas', compact('aktivitass'));

        $reguler = Aktivitas::where('tipe', 'Reguler')->orderBy('urutan')->get();
        $halfDay = Aktivitas::where('tipe', 'Half Day')->orderBy('urutan')->get();
        $fullDay = Aktivitas::where('tipe', 'Full Day')->orderBy('urutan')->get();
        $ekstrakurikulers = Ekstrakurikuler::all();

        return view('admin.aktivitas.aktivitas', compact('reguler', 'halfDay', 'fullDay', 'ekstrakurikulers'));
    }

    public function create()
    {
        return view('admin.aktivitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_aktivitas' => 'required|string|max:255',
            'tipe' => 'required|string',
            'urutan' => 'required|integer',
        ]);
        
        $this->adjustOrder($request->urutan, $request->tipe);

        Aktivitas::create($request->all());
        

        return redirect()->route('admin.aktivitas.index')->with('success', 'Aktivitas berhasil ditambahkan.');
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
        return view('admin.aktivitas.edit', compact('aktivitas'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_aktivitas' => 'required|string|max:255',
            'tipe' => 'required|string',
            'urutan' => 'required|integer',
        ]);

        $aktivitas = Aktivitas::findOrFail($id);
        $tipe = $aktivitas->tipe;
        $oldOrder = $aktivitas->urutan;
        $newOrder = $request->input('urutan');

        // Jika urutan berubah, sesuaikan urutan aktivitas lain
        // Jika urutan berubah, sesuaikan aktivitas lain
        if ($oldOrder != $newOrder) {
            if ($newOrder < $oldOrder) {
                // Jika urutan baru lebih kecil, geser ke bawah aktivitas di antara
                Aktivitas::where('tipe', '=', $tipe)
                    ->where('urutan', '>=', $newOrder)
                    ->where('urutan', '<', $oldOrder)
                    ->increment('urutan');
            } else {
                // Jika urutan baru lebih besar, geser ke atas aktivitas di antara
                Aktivitas::where('tipe', '=', $tipe)
                    ->where('urutan', '<=', $newOrder)
                    ->where('urutan', '>', $oldOrder)
                    ->decrement('urutan');
            }
        }

        $aktivitas->update($request->all());


        // Redirect ke halaman daftar aktivitas dengan pesan sukses
        return redirect()->route('admin.aktivitas.index')->with('success', 'Data updated successfully');
    }




    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        // Cari aktivitas berdasarkan ID
        $aktivitas = Aktivitas::findOrFail($id);

        // Adjust urutan aktivitas lainnya
        $this->adjustOrderAfterDeletion($aktivitas->urutan, $aktivitas->tipe);

        // Hapus data aktivitas dari database
        $aktivitas->delete();

        return redirect()->route('admin.aktivitas.index')->with('success', 'Aktivitas berhasil dihapus!');
    }

    protected function adjustOrder($newOrder, $tipe, $excludeId = null)
    {
        $conflictingActivities = Aktivitas::where('urutan', '>=', $newOrder)
            ->where('tipe', $tipe);

        // Jika ada ID yang perlu dikecualikan (misalnya saat update)
        if ($excludeId) {
            $conflictingActivities->where('id', '!=', $excludeId);
        }

        // Increment urutan untuk semua aktivitas yang bertabrakan
        $conflictingActivities->orderBy('urutan', 'asc')->get()->each(function ($aktivitas) {
            $aktivitas->update(['urutan' => $aktivitas->urutan + 1]);
        });
    }

    protected function adjustOrderAfterDeletion($deletedOrder, $tipe)
    {
        // Temukan semua aktivitas dengan urutan lebih besar dari aktivitas yang dihapus
        $activitiesToAdjust = Aktivitas::where('urutan', '>', $deletedOrder)
            ->where('tipe', $tipe)
            ->orderBy('urutan', 'asc')
            ->get();

        // Kurangi nilai urutan setiap aktivitas yang relevan
        $activitiesToAdjust->each(function ($aktivitas) {
            $aktivitas->update(['urutan' => $aktivitas->urutan - 1]);
        });
    }



}
    


