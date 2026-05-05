<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pelanggan;
use App\Servis;

class Motor extends Model
{
    protected $table = 'motor';
    protected $primaryKey = 'motor_id';
    protected $fillable = [
        'pelanggan_id', 
        'merk',
        'tipe',
        'plat_motor'
    ];

     public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function servis()
    {
        return $this->hasMany(Servis::class);
    }
}
