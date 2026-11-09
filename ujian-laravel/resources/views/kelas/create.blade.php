<h1>Tambah Kelas</h1>
<form action="{{ route('kelas.store') }}" method="POST">
    <table>
        <tr>
            <td>Kode Kelas:</td>
            <td><input type="text" name="kode_kelas" required></td>
        </tr>
        <tr>
            <td>Nama Kelas:</td>
            <td><input type="text" name="nama_kelas" required></td>
        </tr>
        <tr>
            <td>Tingkat:</td>
            <td><input type="text" name="tingkat" required></td>
        </tr>
        <tr>
            <td>Tahun Ajaran:</td>
            <td><input type="text" name="tahun_ajaran" required></td>
        </tr>
        <tr>
            <td>Wali Kelas:</td>
            <td><input type="text" name="wali_kelas"></td>
        </tr>
    </table>
    <button type="submit">Simpan</button>
    <button type="reset">Reset</button>
</form>