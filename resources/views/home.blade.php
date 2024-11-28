@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="display-4">Sistem Manajemen Mahasiswa & Dosen</h1>
            <p class="lead">Selamat datang di aplikasi pengelolaan data akademik</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Data Dosen</h5>
                    <p class="card-text display-4">{{ $totalDosen }}</p>
                    <a href="{{ route('dosen.index') }}" class="btn btn-primary">Lihat Daftar Dosen</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Data Mahasiswa</h5>
                    <p class="card-text display-4">{{ $totalMahasiswa }}</p>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-success">Lihat Daftar Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12 text-center">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Navigasi Utama</h5>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('dosen.create') }}" class="btn btn-outline-primary">Tambah Dosen Baru</a>
                        <a href="{{ route('mahasiswa.create') }}" class="btn btn-outline-success">Tambah Mahasiswa Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection