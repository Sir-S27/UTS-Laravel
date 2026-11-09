<H1>Tambah Siswa</H1>
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <table>
        <tr>
            <td>NIS:</td>
            <td><input type="text" name="nis"></td>
        </tr>
        <tr>
            <td>Nama Lengkap:</td>
            <td><input type="text" name="nama_lengkap"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin:</td>
            <td>
                <select name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kelas:</td>
            <td>
                <select name="kelas_id" required>
                    <option value="">-- Pilih Kelas --</option>
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}" {{ old('kelas_id') == $k->id ? 'selected' : '' }}>
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir:</td>
            <td><input type="text" name="tempat_lahir" ></td>
        </tr>
        <tr>
            <td>Tanggal Lahir:</td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>No. HP:</td>
            <td><input type="text" name="no_hp" ></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" ></td>
        </tr>
        <tr>
            <td>Asal Sekolah:</td>
            <td><input type="text" name="asal_sekolah" ></td>
        </tr>
        <tr>
            <td>Jurusan:</td>
            <td><input type="text" name="jurusan" ></td>
        </tr>
        <tr>
            <td>Nama Ayah:</td>
            <td><input type="text" name="nama_ayah"></td>
        </tr>
        <tr>
            <td>Nama Ibu:</td>
            <td><input type="text" name="nama_ibu" ></td>
        </tr>
        <tr>
            <td>No. HP Wali:</td>
            <td><input type="text" name="no_hp_wali" ></td>
        </tr>
        <tr>
            <td>Status:</td>
            <td>
                <select name="status" required>
                    <option value="Aktif" {{ old('status', 'Aktif') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Nonaktif" {{ old('status') == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                </select>
            </td>
        </tr>
    </table>
    <button type="submit">Simpan</button>
    <button type="reset">Reset</button>
</form>