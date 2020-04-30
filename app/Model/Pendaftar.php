<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'pendaftaran';
    protected $fillable = ['kodePendaftaran', 'jurusan_id', 'jenisPendaftaran_id', 'asalSekolah', 'kotaSekolah', 'namaLengkap', 'jenisKelamin', 'NISN', 'jenisIdentitas', 'noIdentitas', 'kartuKeluarga', 'tempatLahir', 'tanggalLahir', 'tinggiBadan', 'AKTA', 'agama', 'avatar', 'kewarganegaraan', 'negara', 'berkebutuhanKhusus', 'alamatJalan', 'rt', 'rw', 'dusun', 'kelurahan', 'kecamatan', 'kota', 'provinsi', 'kodePos', 'tinggalBersama', 'anakKe', 'jumlahSaudara', 'KKS', 'KPS', 'noKPS', 'penerimaKIP', 'noKIP', 'namaKIP', 'namaAyah', 'NIK_ayah', 'tahunLahirAyah', 'pendidikanAyah', 'pekerjaanAyah', 'penghasilanAyah', 'namaIbu', 'NIK_ibu', 'tahunLahirIbu', 'pendidikanIBu', 'pekerjaanIbu', 'penghasilanIbu', 'namaWali', 'NIK_wali', 'tahunLahirWali', 'pendidikanWali', 'pekerjaanWali', 'penghasilanWali', 'teleponAyah', 'teleponIbu', 'teleponWali', 'teleponVerifikasi', 'emailPendaftar', 'jarakSekolah', 'waktuTempuh', 'alatTransfortasi', 'noPesertaUjian', 'noIjazah', 'noSKHUN', 'eskul_id', 'hobi', 'pendamping', 'fotoPendamping'];

    public function jurusan()
    {
        return $this->hasMany(Jurusan::class, 'jurusan_id', 'id');
    }

    public function eskul()
    {
        return $this->hasMany(Eskul::class, 'jurusan_id', 'id');
    }
}
