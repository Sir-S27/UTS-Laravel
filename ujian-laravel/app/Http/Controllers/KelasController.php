<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = DB::table('table_kelas')->get();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $nama_kelas = $request->nama_kelas;
        try {
            DB::table('table_kelas')->insert([
                'kode_kelas' => $request->kode_kelas,
                'nama_kelas' => $nama_kelas,
                'tingkat' => $request->tingkat,
                'tahun_ajaran' => $request->tahun_ajaran,
                'wali_kelas' => $request->wali_kelas,
            ]);
            return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan data kelas: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $kelas = DB::table('table_kelas')->where('id', $id)->first();
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::table('table_kelas')->where('id', $id)->update([
                'kode_kelas' => $request->kode_kelas,
                'nama_kelas' => $request->nama_kelas,
                'tingkat' => $request->tingkat,
                'tahun_ajaran' => $request->tahun_ajaran,
                'wali_kelas' => $request->wali_kelas,
            ]);
            return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui data kelas: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DB::table('table_kelas')->where('id', $id)->delete();
            return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data kelas: ' . $e->getMessage());
        }
    }
}
