<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class penjualanModel extends Model
{
    use HasFactory;

    protected $table = 't_penjualan'; // Sesuaikan dengan nama tabel yang benar
    protected $primaryKey = 'penjualan_id'; 

    protected $fillable = ['penjualan_id','pembeli','user_id','barang_id','harga','jumlah'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }
}