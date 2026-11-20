<div class="field">
  <label for="nama">Nama</label>
  <input type="text" id="nama" name="nama" value="{{ old('nama', $staff->nama ?? '') }}" required>
</div>
<div class="field">
  <label for="jobdesk">Jobdesk</label>
  <select id="jobdesk" name="jobdesk" required>
    <option value="" disabled {{ old('jobdesk', $staff->jobdesk ?? '') === '' ? 'selected' : '' }}></option>
    @foreach (['Pemilik Kos', 'Cleaning Service', 'Security Guard'] as $j)
      <option value="{{ $j }}" {{ old('jobdesk', $staff->jobdesk ?? '') === $j ? 'selected' : '' }}>{{ $j }}</option>
    @endforeach
  </select>
</div>
<div class="field">
  <label for="no_telepon">No. Telepon</label>
  <input type="tel" id="no_telepon" name="no_telepon" value="{{ old('no_telepon', $staff->no_telepon ?? '') }}" required>
</div>
<div class="field">
  <label for="usia">Usia</label>
  <input type="number" id="usia" name="usia" min="17" max="80" value="{{ old('usia', $staff->usia ?? '') }}" required>
</div>
<div class="field">
  <label for="ttl">TTL</label>
  <input type="text" id="ttl" name="ttl" placeholder="Surakarta, 03-09-2004" value="{{ old('ttl', $staff->ttl ?? '') }}" required>
</div>
<div class="field">
  <label for="area_kerja">Area Kerja</label>
  <input type="text" id="area_kerja" name="area_kerja" placeholder="Lantai 1" value="{{ old('area_kerja', $staff->area_kerja ?? '') }}" required>
</div>
