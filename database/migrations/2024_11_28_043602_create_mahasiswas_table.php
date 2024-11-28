<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->string('nama_mahasiswa');
            $table->unsignedBigInteger('dosen_id'); // Foreign key ke tabel dosen
            $table->string('email')->unique();
            $table->string('jurusan');
            $table->timestamps();

            $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}