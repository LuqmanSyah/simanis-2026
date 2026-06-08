<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Rupadana\ApiService\Contracts\HasAllowedFields;
use Rupadana\ApiService\Contracts\HasAllowedFilters;
use Rupadana\ApiService\Contracts\HasAllowedSorts;

class Produk extends Model implements HasAllowedFields, HasAllowedFilters, HasAllowedSorts
{
    protected $guarded = ['id'];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }

    public static function getAllowedFields(): array
    {
        return ['id', 'nama', 'harga', 'stok', 'kategori'];
    }

    public static function getAllowedSorts(): array
    {
        return ['nama', 'harga', 'stok', 'created_at'];
    }

    public static function getAllowedFilters(): array
    {
        return ['nama', 'kategori'];
    }
}
