<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;

    protected $table = 'obats';
    protected $fillable = [
        'nama_obat', 
        'jenis_obat', 
        'stok', 
        'harga',
        'gambar'
    ];

    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
