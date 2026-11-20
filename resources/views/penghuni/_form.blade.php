@csrf

<div class="form-grid">

    <div>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Contoh: Greenaura" value="{{ old('nama', $penghuni->nama) }}">
        @error('nama') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>No KTP</label>
        <input type="text" name="no_ktp" placeholder="No KTP" maxlength="16" value="{{ old('no_ktp', $penghuni->no_ktp) }}">
        @error('no_ktp') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Pekerjaan</label>
        <select name="pekerjaan">
            <option value="">-- Pilih --</option>
            <option value="Mahasiswa" {{ old('pekerjaan', $penghuni->pekerjaan) == 'Mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
            <option value="Karyawan" {{ old('pekerjaan', $penghuni->pekerjaan) == 'Karyawan' ? 'selected' : '' }}>Karyawan</option>
            <option value="Lainnya" {{ old('pekerjaan', $penghuni->pekerjaan) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
        </select>
        @error('pekerjaan') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>No Kamar</label>
        <input type="text" name="no_kamar" placeholder="Contoh: 001" value="{{ old('no_kamar', $penghuni->no_kamar) }}">
        @error('no_kamar') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>No HP</label>
        <input type="text" name="no_hp" placeholder="Contoh: 085707965768" value="{{ old('no_hp', $penghuni->no_hp) }}">
        @error('no_hp') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Kontak Darurat</label>
        <input type="text" name="kontak_darurat" placeholder="Contoh: 085707965768" value="{{ old('kontak_darurat', $penghuni->kontak_darurat) }}">
        @error('kontak_darurat') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="kolom-penuh">
        <label>Catatan <span>(opsional)</span></label>
        <textarea name="catatan" placeholder="Opsional"></textarea>
    </div>

    <hr>

    <div class="tombol">
        <a href="{{ route('penghuni.index') }}" class="tombol-batal">Batal</a>
        <button type="submit" class="tombol-simpan">Simpan</button>
    </div>

</div>
