<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nim', 
        'nama_mahasiswa', 
        'dosen_id', 
        'email', 
        'jurusan'
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}