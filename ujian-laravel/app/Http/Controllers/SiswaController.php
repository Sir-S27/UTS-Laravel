<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = DB::table('table_siswa')
            ->join('table_kelas', 'table_siswa.kelas_id', '=', 'table_kelas.id')
            ->select('table_siswa.*', 'table_kelas.nama_kelas')
            ->get();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        $kelas = DB::table('table_kelas')->get();
        return view('siswa.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        try {
            DB::table('table_siswa')->insert([
                'kelas_id'      => $request->input('kelas_id'),
                'nis'           => $request->input('nis'),
                'nama_lengkap'  => $request->input('nama_lengkap'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'tempat_lahir'  => $request->input('tempat_lahir'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
                'alamat'        => $request->input('alamat'),
                'no_hp'         => $request->input('no_hp'),
                'email'         => $request->input('email'),
                'asal_sekolah'  => $request->input('asal_sekolah'),
                'jurusan'       => $request->input('jurusan'),
                'nama_ayah'     => $request->input('nama_ayah'),
                'nama_ibu'      => $request->input('nama_ibu'),
                'no_hp_wali'    => $request->input('no_hp_wali'),
                'status'        => $request->input('status'),
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
            return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan data siswa: ' . $e->getMessage());
        }
    }
    public function edit($id)
    {
        $siswa = DB::table('table_siswa')->where('id', $id)->first();
        $kelas = DB::table('table_kelas')->get();
        return view('siswa.edit', compact('siswa', 'kelas'));
    }

    public function update($id, Request $request)
    {
        try {
            DB::table('table_siswa')->where('id', $id)->update([
                'kelas_id'      => $request->input('kelas_id'),
                'nis'           => $request->input('nis'),
                'nama_lengkap'  => $request->input('nama_lengkap'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'tempat_lahir'  => $request->input('tempat_lahir'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
                'alamat'        => $request->input('alamat'),
                'no_hp'         => $request->input('no_hp'),
                'email'         => $request->input('email'),
                'asal_sekolah'  => $request->input('asal_sekolah'),
                'jurusan'       => $request->input('jurusan'),
                'nama_ayah'     => $request->input('nama_ayah'),
                'nama_ibu'      => $request->input('nama_ibu'),
                'no_hp_wali'    => $request->input('no_hp_wali'),
                'status'        => $request->input('status'),
                'updated_at'    => now(),
            ]);
            return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->route('siswa.index')->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }
    }
    public function destroy($id)
    {
        try {
            DB::table('table_siswa')->where('id', $id)->delete();
            return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data siswa: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $siswa = DB::table('table_siswa')
            ->join('table_kelas', 'table_siswa.kelas_id', '=', 'table_kelas.id')
            ->select('table_siswa.*', 'table_kelas.nama_kelas')
            ->where('table_siswa.id', $id)
            ->first();

        if (!$siswa) {
            return redirect()->route('siswa.index')->with('error', 'Data siswa tidak ditemukan.');
        }

        return view('siswa.show', compact('siswa'));
    }
}
