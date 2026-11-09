<h1>Edit Kelas</h1>
<form action="{{route('kelas.update', ['id' => $kelas->id])}}" method="POST">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td>Kode Kelas:</td>
            <td><input type="text" name="kode_kelas" value="{{ $kelas->kode_kelas }}" required></td>
        </tr>
        <tr>
            <td>Nama Kelas:</td>
            <td><input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}" required></td>
        </tr>
        <tr>
            <td>Tingkat:</td>
            <td><input type="text" name="tingkat" value="{{ $kelas->tingkat }}" required></td>
        </tr>
        <tr>
            <td>Tahun Ajaran:</td>
            <td><input type="text" name="tahun_ajaran" value="{{ $kelas->tahun_ajaran }}" required></td>
        </tr>
        <tr>
            <td>Wali Kelas:</td>
            <td><input type="text" name="wali_kelas" value="{{ $kelas->wali_kelas }}"></td>
        </tr>
    </table>
    <button type="submit">Update</button>
</form>