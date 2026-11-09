<h1>Ini Halaman Siswa</h1>
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

<a href="{{route('siswa.create')}}">Tambah Siswa</a>
<table border="1">
    <tr>
        <th>NIS</th>
        <th>Nama Siswa</th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    <tbody>
        @foreach ($siswa as $s)
            <tr>
                <td>{{ $s->nis }}</td>
                <td>{{ $s->nama_lengkap }}</td>
                <td>{{ $s->jenis_kelamin }}</td>
                <td>{{ $s->nama_kelas }}</td>
                <td>
                    <div style="display: flex; gap: 10px;">
                    <a href="{{ route('siswa.edit', $s->id) }}">Edit</a>
                    <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">Hapus</button>
                    </form>
                    <a href="{{ route('siswa.show', $s->id) }}">Detail</a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>