<h1>Edit Siswa</h1>
<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>NIS:</td>
            <td><input type="text" name="nis" value="{{ $siswa->nis }}"></td>
        </tr>
        <tr>
            <td>Nama Lengkap:</td>
            <td><input type="text" name="nama_lengkap" value="{{ $siswa->nama_lengkap }}"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin:</td>
            <td>
                <select name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L" {{ $siswa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ $siswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kelas:</td>
            <td>
                <select name="kelas_id" required>
                    <option value="">-- Pilih Kelas --</option>
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}" {{ $siswa->kelas_id == $k->id ? 'selected' : '' }}>
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir:</td>
            <td><input type="text" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir:</td>
            <td><input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}"></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><input type="text" name="alamat" value="{{ $siswa->alamat }}"></td>
        </tr>
        <tr>
            <td>No. HP:</td>
            <td><input type="text" name="no_hp" value="{{ $siswa->no_hp }}"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" value="{{ $siswa->email }}"></td>
        </tr>
        <tr>
            <td>Asal Sekolah:</td>
            <td><input type="text" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}"></td>
        </tr>
        <tr>
            <td>Jurusan:</td>
            <td><input type="text" name="jurusan" value="{{ old('jurusan', $siswa->jurusan) }}" maxlength="100"
                    required></td>
        </tr>
        <tr>
            <td>Nama Ayah:</td>
            <td><input type="text" name="nama_ayah" value="{{ $siswa->nama_ayah }}"></td>
        </tr>
        <tr>
            <td>Nama Ibu:</td>
            <td><input type="text" name="nama_ibu" value="{{ $siswa->nama_ibu }}"></td>
        </tr>
        <tr>
            <td>No. HP Wali:</td>
            <td><input type="text" name="no_hp_wali" value="{{ $siswa->no_hp_wali }}"></td>
        </tr>
        <tr>
            <td>Status:</td>
            <td>
                <select name="status" required>
                    <option value="Aktif" {{ $siswa->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Nonaktif" {{ $siswa->status == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Update</button></td>
        </tr>
    </table>
</form>
