<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kamar',
        'nama',
        'email',
        'phone',
        'tanggal_masuk',
        'tanggal_keluar',
    ];

    public function room()
    {
        return $this->hasOne('App\Models\Room', 'id', 'id_kamar');
    }
}
