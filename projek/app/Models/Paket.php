<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table="paket";
    protected $primaryKey="id_paket";
    protected $fillable = [
        'nama_paket',
        'harga_paket',
        'id_meja',
    ];

    public function meja()
    {
        return $this->belongsto('App\Models\Meja', 'id_meja', 'id_meja');
    }
}
