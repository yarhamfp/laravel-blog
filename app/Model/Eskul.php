<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $table = 'eskul';
    protected $fillable = ['eskul', 'slug'];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftar::class, 'eskul_id', 'id');
    }
}
