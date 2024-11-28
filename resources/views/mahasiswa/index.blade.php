@extends('layouts.app')

@section('content')
<h1>Data Mahasiswa</h1>
<a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Dosen Wali</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama_mahasiswa }}</td>
            <td>{{ $mahasiswa->dosen->kode_dosen }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>{{ $mahasiswa->jurusan }}</td>
            <td>
            <a href="{{ route('mahasiswa.get-edit-form', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('mahasiswa.delete', $mahasiswa->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection