<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PenghuniController extends Controller
{
    private function rules(?int $id = null): array
    {
        return [
            'nama'           => 'required|string|max:255',
            'no_ktp'         => ['required', 'digits:16', Rule::unique('penghuni', 'no_ktp')->ignore($id)],
            'pekerjaan'      => 'required|in:Mahasiswa,Karyawan,Lainnya',
            'no_hp'          => 'required|string|max:20',
            'kontak_darurat' => 'required|string|max:255',
            'no_kamar'       => 'required|string|max:20',
        ];
    }

    public function index()
    {
        $penghuni = Penghuni::orderBy('id')->get();
        return view('penghuni.index', compact('penghuni'));
    }

    public function create()
    {
        return view('penghuni.create', ['penghuni' => new Penghuni]);
    }

    public function store(Request $request)
    {
        Penghuni::create($request->validate($this->rules()));

        return redirect()->route('penghuni.index')
            ->with('success', 'Data penghuni berhasil ditambahkan.');
    }

    public function show(Penghuni $penghuni)
    {
        return view('penghuni.show', compact('penghuni'));
    }

    public function edit(Penghuni $penghuni)
    {
        return view('penghuni.edit', compact('penghuni'));
    }

    public function update(Request $request, Penghuni $penghuni)
    {
        $penghuni->update($request->validate($this->rules($penghuni->id)));

        return redirect()->route('penghuni.index')
            ->with('success', 'Data penghuni berhasil diperbarui.');
    }

    public function destroy(Penghuni $penghuni)
    {
        $penghuni->delete();

        return redirect()->route('penghuni.index')
            ->with('success', 'Data penghuni berhasil dihapus.');
    }
}