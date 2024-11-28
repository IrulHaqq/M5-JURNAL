@extends('layouts.app')

@section('content')
<h1>Data Dosen</h1>
<a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3">Tambah Dosen</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Kode Dosen</th>
            <th>Nama Dosen</th>
            <th>NIP</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dosens as $dosen)
        <tr>
            <td>{{ $dosen->kode_dosen }}</td>
            <td>{{ $dosen->nama_dosen }}</td>
            <td>{{ $dosen->nip }}</td>
            <td>{{ $dosen->email }}</td>
            <td>
            <a href="{{ route('dosen.get-edit-form', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>                <form action="{{ route('dosen.delete', $dosen->id) }}" method="POST" style="display:inline">
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