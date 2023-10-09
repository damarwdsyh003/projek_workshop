<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table="pemesanan";
    protected $primaryKey="id_pemesanan";
    protected $fillable=[
        'tgl_pemesanan',
        'id_meja',
        'id_paket',
        'id_users',
    ];

    // Pemesanan.php

    public function meja()
    {
        return $this->belongsTo('App\Models\Meja', 'id_meja', 'id_meja');
    }

    public function paket()
    {
        return $this->belongsto('App\Models\Paket', 'id_paket', 'id_paket');
    }

    public function users()
    {
        return $this->belongsto('App\Models\User', 'id_users', 'id_users');
    }
}
