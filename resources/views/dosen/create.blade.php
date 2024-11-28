@extends('layouts.app')

@section('content')
<h1>Tambah Dosen</h1>
<form action="{{ route('dosen.store') }}" method="POST">
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
        <label>Kode Dosen</label>
        <input type="text" name="kode_dosen" class="form-control" required value="{{ old('kode_dosen') }}" maxlength="3">
    </div>
    <div class="mb-3">
        <label>Nama Dosen</label>
        <input type="text" name="nama_dosen" class="form-control" required value="{{ old('nama_dosen') }}">
    </div>
    <div class="mb-3">
        <label>NIP</label>
        <input type="text" name="nip" class="form-control" required value="{{ old('nip') }}">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
    </div>
    <div class="mb-3">
        <label>No Telepon</label>
        <input type="text" name="no_telepon" class="form-control" required value="{{ old('no_telepon') }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
