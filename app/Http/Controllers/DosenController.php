<?php
namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_dosen' => 'required|unique:dosens|max:3',
            'nama_dosen' => 'required',
            'nip' => 'required|unique:dosens',
            'email' => 'required|email|unique:dosens',
            'no_telepon' => 'required'
        ]);

        Dosen::create($validatedData);
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan');
    }

    public function getEditForm($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        $dosen = Dosen::findOrFail($id);
        $validatedData = $request->validate([
            'kode_dosen' => 'required|max:3|unique:dosens,kode_dosen,' . $dosen->id,
            'nama_dosen' => 'required',
            'nip' => 'required|unique:dosens,nip,'.$dosen->id,
            'email' => 'required|email|unique:dosens,email,'.$dosen->id,
            'no_telepon' => 'required'
        ]);

        $dosen->update($validatedData);
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diupdate');
    }

    public function delete($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus');
    }
}