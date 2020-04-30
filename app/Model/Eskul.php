<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $fillable = ['eskul'];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftar::class, 'eskul_id', 'id');
    }
}
