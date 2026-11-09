<h1>Ini Halaman Kelas</h1>
<div style="display: flex; gap: 20px;"> |
<a href="{{route('kelas.index')}}">Kelas</a> |
<a href="{{route('siswa.index')}}">Siswa</a> |
<a href="{{ url('/') }}">Home</a> |
</div><br><br>

@if (session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif
@if (session('error'))
    <div style="color: red;">{{ session('error') }}</div>
@endif

<a href="{{route('kelas.create')}}">Tambah Kelas</a>
<table border="1">
    <tr>
        <th>Kode Kelas</th>
        <th>Nama Kelas</th>
        <th>Tingkat</th>
        <th>Tahun Ajaran</th>
        <th>Wali Kelas</th>
        <th>Aksi</th>
    </tr>
    <tbody>
        @foreach ($kelas as $k)
            <tr>
                <td>{{ $k->kode_kelas }}</td>
                <td>{{ $k->nama_kelas }}</td>
                <td>{{ $k->tingkat }}</td>
                <td>{{ $k->tahun_ajaran }}</td>
                <td>{{ $k->wali_kelas }}</td>
                <td>
                    <a href="{{ route('kelas.edit', $k->id) }}">Edit</a>
                    <form action="{{ route('kelas.destroy', $k->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus kelas ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
