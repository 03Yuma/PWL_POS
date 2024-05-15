<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class penjualanModel extends Model
{
    // use HasFactory;

    // protected $table = 't_penjualan'; // Sesuaikan dengan nama tabel yang benar
    // protected $primaryKey = 'penjualan_id'; 

    // protected $fillable = ['penjualan_id','pembeli','user_id','barang_id','harga','jumlah'];

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    // }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
    protected $table = 't_penjualan';
    protected $primaryKey = 'penjualan_id';
    protected $fillable = [
        'user_id',
        'barang_id',
        'harga',
        'jumlah',
        'image' //tambahan
    ];
    public function user()
    {
        return $this->belongsTo(
            UserModel::class,
            'user_id'
        );
    }
    public function barang()
    {
        return $this->belongsTo(
            BarangModel::class,
            'barang_id'
        );
    }
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }
}
