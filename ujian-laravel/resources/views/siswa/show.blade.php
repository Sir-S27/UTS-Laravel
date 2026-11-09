<h1>Detail Siswa</h1>
<table border="1">
    <tr>
        <th>NIS</th>
        <td>{{ $siswa->nis }}</td>
    </tr>
    <tr>
        <th>Nama Lengkap</th>
        <td>{{ $siswa->nama_lengkap }}</td>
    </tr>
    <tr>
        <th>Jenis Kelamin</th>
        <td>{{ $siswa->jenis_kelamin }}</td>
    </tr>
    <tr>
        <th>Kelas</th>
        <td>{{ $siswa->nama_kelas }}</td>
    </tr>
    <tr>
        <th>Tempat Lahir</th>
        <td>{{ $siswa->tempat_lahir }}</td>
    </tr>
    <tr>
        <th>Tanggal Lahir</th>
        <td>{{ $siswa->tanggal_lahir }}</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>{{ $siswa->alamat }}</td>
    </tr>
    <tr>
        <th>No. HP</th>
        <td>{{ $siswa->no_hp }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $siswa->email }}</td>
    </tr>
    <tr>
        <th>Asal Sekolah</th>
        <td>{{ $siswa->asal_sekolah }}</td>
    </tr>
    <tr>
        <th>Jurusan</th>
        <td>{{ $siswa->jurusan }}</td>
    </tr>
</table>
<button><a href="{{ route('siswa.index') }}">Kembali</a></button>