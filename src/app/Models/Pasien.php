<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = ['nama', 'alamat', 'no_telp'];

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
