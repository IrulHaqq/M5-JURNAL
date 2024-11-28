@extends('layouts.app')

@section('content')
<h1>Tambah Mahasiswa</h1>
<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control" required value="{{ old('nim') }}">
    </div>
    <div class="mb-3">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_mahasiswa" class="form-control" required value="{{ old('nama_mahasiswa') }}">
    </div>
    <div class="mb-3">
        <label>Dosen Wali</label>
        <select name="dosen_id" class="form-control" required>
            <option value="">Pilih Dosen Wali</option>
            @foreach($dosens as $dosen)
                <option value="{{ $dosen->id }}" {{ old('dosen_id') == $dosen->id ? 'selected' : '' }}>
                    {{ $dosen->nama_dosen }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
    </div>
    <div class="mb-3">
        <label>Jurusan</label>
        <select name="jurusan" class="form-control" required>
            <option value="">Pilih Jurusan</option>
            <option value="Teknik Informatika" {{ old('jurusan') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
            <option value="Sistem Informasi" {{ old('jurusan') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
            <option value="Manajemen Informatika" {{ old('jurusan') == 'Manajemen Informatika' ? 'selected' : '' }}>Manajemen Informatika</option>
            <option value="Teknik Komputer" {{ old('jurusan') == 'Teknik Komputer' ? 'selected' : '' }}>Teknik Komputer</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
