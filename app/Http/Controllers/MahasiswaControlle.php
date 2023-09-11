<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class MahasiswaControlle extends Controller
{
    public function index()
    {
        $mhs = Mahasiswa::all();
        return view('administrator.mahasiswa', compact('mhs'));

    }

    public function create(): View
    {
        return view('administrator.cr_mhs');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nime'      => 'required|unique:mahasiswas',
            'name'      => 'required',
            'email'     => 'required',
            'jurusan'   => 'required',
            'kelas'     => 'required',
        ]);

        Mahasiswa::create($request->all());
        return redirect('/mahasiswa');
    }

    public function show(string $id): View
    {
        $mhs = Mahasiswa::find($id);
        return view('administrator.sh_mhs', compact('mahasiswa'));
    }
    public function edit(string $id): View
    {
        $mhs = Mahasiswa::find($id);
        return view('administrator.ed_mhs', compact('mahasiswa'));
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $mhs = Mahasiswa::find($id);
        $mhs->update();

        return redirect()->route('administrator.mahasiswa')
        ->with('success', 'Data Berhasil Perbarui');
    }
    public function destroy(string $id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();

        return redirect()->route('administrator.mahasiswa')
        ->with('success', 'Data Berhasil Dihapus');
    }
}
