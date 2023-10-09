<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipemeja extends Model
{
    use HasFactory;

    protected $table="tipemeja";
    protected $primaryKey="id_tipemeja";
    protected $fillable = [
        'nama_tipemeja',
    ];
}
