<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';

    protected $fillable = [
        'id',
        'id_resep_obat',
        'id_pasien',
        'tanggal_payment',
        'total_harga',
    ];
}
