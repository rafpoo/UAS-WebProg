<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('user.acara', compact('events'));
    }

    public function indexAdmin()
    {
        $events = Event::all();
        return view('admin.acara.acara', compact('events'));
    }

    public function create()
    {
        return view('admin.acara.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'descriptions' => 'required|string',
            'date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $path = $request->file('image')->store('events', 'public');
        File::copy(storage_path('app/public/' . $path), public_path('storage/' . $path));
        
        Event::create([
            'title' => $request->title,
            'descriptions' => $request->descriptions,
            'date' => $request->date,
            'image' => $path,
        ]);
        

        return redirect()->route('admin.acara.index')->with('success', 'Event berhasil ditambahkan.');
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
        $event = Event::findOrFail($id);
        return view('admin.acara.edit', compact('event'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'descriptions' => 'required|string',
            'date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil semua data kecuali foto
        $data = $request->except(['image']);

        // Jika ada file foto yang diunggah
        if ($request->hasFile('image')) {
            // Hapus foto lama jika ada
            if ($event->image && Storage::disk('public')->exists($event->image)) {
                Storage::disk('public')->delete($event->image);
            }
            
            $filePath = public_path('storage/' . $event->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            

            // Simpan foto baru
            $path = $request->file('image')->store('events', 'public');
            File::copy(storage_path('app/public/' . $path), public_path('storage/' . $path));
            $data['image'] = $path; // Tambahkan path foto baru ke array data
        }

        // Update data acara
        $event->update($data);

        // Redirect ke halaman daftar acara dengan pesan sukses
        return redirect()->route('admin.acara.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        // Cari event berdasarkan ID
        $event = Event::findOrFail($id);

        // Tentukan path file berdasarkan nama yang disimpan di database
        $filePath = public_path('storage/' . $event->image);

        if ($event->image && Storage::disk('public')->exists($event->image)) {
            Storage::disk('public')->delete($event->image);
        }

        // Hapus file jika ada
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        // Hapus data event dari database
        $event->delete();

        return redirect()->route('admin.acara.index')->with('success', 'Event berhasil dihapus!');
    }


}
