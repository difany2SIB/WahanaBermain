<?php

namespace App\Http\Controllers;

use App\Models\wahana;
use Illuminate\Http\Request;

class WahanaController extends Controller
{
    public function index()
    {
        $wahanas = wahana::all();

        return view('wahana.index', compact('wahanas'));
    }

    public function create()
    {
        return view('wahana.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama_wahana' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'lokasi' => 'required|string|max:255',
        'harga_tiket' => 'required|numeric|min:0',
        'jam_operasional' => 'required|string|max:255',
    ]);

    wahana::create($validated);

    return redirect()->route('wahana.index')
        ->with('success', 'Data wahana berhasil ditambahkan!');
}

    public function show(string $id)
    {
        $wahana = wahana::findOrFail($id);

        return view('wahana.show', compact('wahana'));
    }

    public function edit(string $id)
    {
        $wahana = wahana::findOrFail($id);

        return view('wahana.edit', compact('wahana'));
    }

    public function update(Request $request, string $id)
{
    $validated = $request->validate([
        'nama_wahana' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'lokasi' => 'required|string|max:255',
        'harga_tiket' => 'required|numeric|min:0',
        'jam_operasional' => 'required|string|max:255',
    ]);

    $wahana = wahana::findOrFail($id);
    $wahana->update($validated);

    return redirect()->route('wahana.index')
        ->with('success', 'Data wahana berhasil diperbarui!');
}

    public function destroy(string $id)
    {
        $wahana = wahana::findOrFail($id);
        $wahana->delete();

        return redirect()->route('wahana.index')
            ->with('success', 'Data wahana berhasil dihapus!');
    }
}