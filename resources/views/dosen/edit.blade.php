@extends('layouts.app')

@section('content')
<h1>Edit Dosen</h1>
<form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
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
        <label>Kode Dosen</label>
        <input type="text" name="kode_dosen" value="{{ old('kode_dosen', $dosen->kode_dosen) }}" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label>Nama Dosen</label>
        <input type="text" name="nama_dosen" value="{{ old('nama_dosen', $dosen->nama_dosen) }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>NIP</label>
        <input type="text" name="nip" value="{{ old('nip', $dosen->nip) }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $dosen->email) }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>No Telepon</label>
        <input type="text" name="no_telepon" value="{{ old('no_telepon', $dosen->no_telepon) }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
