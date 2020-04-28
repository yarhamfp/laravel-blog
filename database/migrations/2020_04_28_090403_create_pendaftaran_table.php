<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('kodePendaftaran');
            $table->integer('jurusan_id');
            $table->integer('jenisPendaftaran_id');
            $table->string('asalSekolah');
            $table->string('kotaSekolah');
            $table->string('namaLengkap');
            $table->string('jenisKelamin');
            $table->string('NISN')->nullable();
            $table->string('jenisIdentitas');
            $table->string('noIdentitas');
            $table->string('kartuKeluarga');
            $table->string('tempatLahir')->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->double('tinggiBadan')->nullable();
            $table->double('beratBandan')->nullable();
            $table->string('AKTA')->nullable();
            $table->string('agama');
            $table->string('avatar')->nullable();
            $table->string('kewarganegaraan');
            $table->string('negara');
            $table->string('berkebutuhanKhusus')->nullable();
            $table->string('alamatJalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('dusun')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kodePos')->nullable();
            $table->string('tinggal')->nullable();
            $table->integer('anakKe')->nullable();
            $table->integer('jumlahSaudara')->nullable();
            $table->string('KKS')->nullable();
            $table->string('KPS')->nullable();
            $table->string('noKPS')->nullable();
            $table->string('penerimaKIP')->nullable();
            $table->string('NoKIP')->nullable();
            $table->string('namaKIP')->nullable();
            $table->string('namaAyah')->nullable();
            $table->string('NIK_ayah')->nullable();
            $table->string('tahunLahirAyah')->nullable();
            $table->string('pendidikanAyah')->nullable();
            $table->string('pekerjaanAyah')->nullable();
            $table->string('penghasilanAyah')->nullable();
            $table->string('namaIbu')->nullable();
            $table->string('NIK_ibu')->nullable();
            $table->string('tahunLahirIbu')->nullable();
            $table->string('pendidikanIbu')->nullable();
            $table->string('pekerjaanIbu')->nullable();
            $table->string('penghasilanIbu')->nullable();
            $table->string('namaWali')->nullable();
            $table->string('NIK_wali')->nullable();
            $table->string('tahunLahirWali')->nullable();
            $table->string('pendidikanWali')->nullable();
            $table->string('pekerjaanWali')->nullable();
            $table->string('penghasilanWali')->nullable();
            $table->string('teleponAyah')->nullable();
            $table->string('teleponIbu')->nullable();
            $table->string('teleponWali')->nullable();
            $table->string('teleponVerifikasi');
            $table->string('emailPendaftar')->nullable();
            $table->string('jarakSekolah')->nullable();
            $table->string('waktuTempuh')->nullable();
            $table->string('alatTransfortasi')->nullable();
            $table->string('noPesertaUjian');
            $table->string('noIjazah');
            $table->string('noSKHUN');
            $table->integer('eskul_id')->nullable();
            $table->string('hobi')->nullable();
            $table->integer('pendamping_id')->nullable();
            $table->string('fotoPendamping')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
