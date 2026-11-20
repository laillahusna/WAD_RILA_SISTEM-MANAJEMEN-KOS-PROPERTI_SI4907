<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    // aturan validasi (sama seperti pengecekan di simpan.php lama)
    private function aturan(): array
    {
        return [
            'nama'       => 'required|string|max:100',
            'jobdesk'    => 'required|in:Pemilik Kos,Cleaning Service,Security Guard',
            'no_telepon' => 'required|string|max:20',
            'usia'       => 'required|integer|min:17|max:80',
            'ttl'        => 'required|string|max:100',
            'area_kerja' => 'required|string|max:50',
        ];
    }

    // READ: tampilkan form tambah + tabel staff
    public function index()
    {
        $daftar = Staff::orderBy('id', 'asc')->get();

        return view('staff.index', compact('daftar'));
    }

    // CREATE: simpan data baru (pengganti simpan.php)
    public function store(Request $request)
    {
        Staff::create($request->validate($this->aturan()));

        return redirect()->route('staff.index')
            ->with('pesan', ['tipe' => 'sukses', 'teks' => 'Data staff berhasil disimpan.']);
    }

    // UPDATE (1): tampilkan form edit
    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    // UPDATE (2): simpan perubahan
    public function update(Request $request, Staff $staff)
    {
        $staff->update($request->validate($this->aturan()));

        return redirect()->route('staff.index')
            ->with('pesan', ['tipe' => 'sukses', 'teks' => 'Data staff berhasil diubah.']);
    }

    // DELETE: hapus data
    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.index')
            ->with('pesan', ['tipe' => 'sukses', 'teks' => 'Data staff berhasil dihapus.']);
    }
}