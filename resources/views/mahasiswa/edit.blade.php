@extends('layouts.app')

@section('content')
<h1>Edit Mahasiswa</h1>
<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')
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
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control" required>
        </div>
    <div class="mb-3">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_mahasiswa" value="{{ $mahasiswa->nama_mahasiswa }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Dosen Wali</label>
        <select name="dosen_id" class="form-control" required>
            @foreach($dosens as $dosen)
                <option value="{{ $dosen->id }}" 
                    {{ $mahasiswa->dosen_id == $dosen->id ? 'selected' : '' }}>
                    {{ $dosen->nama_dosen }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ $mahasiswa->email }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jurusan</label>
        <select name="jurusan" class="form-control" required>
            <option value="Teknik Informatika" 
                {{ $mahasiswa->jurusan == 'Teknik Informatika' ? 'selected' : '' }}>
                Teknik Informatika
            </option>
            <option value="Sistem Informasi" 
                {{ $mahasiswa->jurusan == 'Sistem Informasi' ? 'selected' : '' }}>
                Sistem Informasi
            </option>
            <option value="Manajemen Informatika" 
                {{ $mahasiswa->jurusan == 'Manajemen Informatika' ? 'selected' : '' }}>
                Manajemen Informatika
            </option>
            <option value="Teknik Komputer" 
                {{ $mahasiswa->jurusan == 'Teknik Komputer' ? 'selected' : '' }}>
                Teknik Komputer
            </option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection