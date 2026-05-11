<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $guarded = ['id'];

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
