<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $fillable = ['jurusan'];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftar::class, 'jurusan_id', 'id');
    }
}
