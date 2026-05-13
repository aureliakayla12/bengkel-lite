<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pelanggan;
use App\Motor;
use App\Mekanik;
use App\Sparepart;

class Servis extends Model
{
    protected $table = 'servis';
    protected $primaryKey = 'servis_id';
    protected $fillable = [
        'pelanggan_id',
        'motor_id',
        'mekanik_id',
        'tanggal_servis',
        'keluhan',
        'biaya_jasa',
        'total_bayar',
        'status'
    ];

     public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id', 'pelanggan_id');
    }

    public function motor()
    {
        return $this->belongsTo(Motor::class, 'motor_id', 'motor_id');
    }

    public function mekanik()
    {
        return $this->belongsTo(Mekanik::class, 'mekanik_id', 'mekanik_id');
    }

    public function sparepart()
    {
        return $this->belongsToMany(Sparepart::class, 'servis_sparepart')
                    ->withPivot('qty', 'harga')
                    ->withTimestamps();
    }
}
