<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $guarded = ['id'];

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
