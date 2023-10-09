<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $table="pembayaran";
    protected $primaryKey="id_pembayaran";
    protected $fillable=[
        'tgl_pembayaran',
        'total_harga',
        'id_pemesanan',
    ];


    public function pemesanan()
    {
        return $this->belongsto('App\Models\Pemesanan', 'id_pemesanan', 'id_pemesanan');
    }
}
