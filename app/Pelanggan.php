<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Motor;
use App\Servis;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'pelanggan_id';
    protected $fillable = [
        'nama', 
        'no_hp',
        'alamat'
    ];

    public function motor()
    {
        return $this->hasMany(Motor::class, 'pelanggan_id', 'pelanggan_id');
    }

    public function servis()
    {
        return $this->hasMany(Servis::class);
    }
}
